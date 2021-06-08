const express = require("express");
const session = require("express-session");
const body    = require("body-parser");
const mysql   = require("mysql");
const app     = express();
const port    = 3003;
const passport      = require("passport");
const LocalStrategy = require("passport-local").Strategy;
const bcrypt = require('bcryptjs');
var cors = require('cors');

var isAdmin = false;

// Connect to the MySql database
var connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "cse135Password",
    database: "hw4"
});
connection.connect();

function findUser(username, func) {
    connection.query(
        "SELECT * FROM users",
        function (error, results, fields) {
            if (error) throw error;
            for(var i = 0; i < results.length; i++) {
                if ( results[i].username === username || results[i].email === username) {
                    return func(null, results[i]);
                }
            }
            return func(null, null);
        }
    );
}

passport.serializeUser(function(user, done) {
    done(null, user.username);
});

passport.deserializeUser(function(username, done) {
    findUser(username, function(err, user) {
        done(err, user);
    });
});

passport.use( new LocalStrategy({ usernameField: 'user',
                                  passwordField: 'pass' },
    function(username, password, done) {
	
	    findUser(username, function(err, user) {
            if ( err ) { return done(err); }
            if ( user == null ) return done(null, false);
            bcrypt.compare(password, user.password, function(err, res) {
                if (err) return done(err);    
                if ( !user || !res ) return done(null, false);
                if ( user.admin ) {
                    isAdmin = true;
                } else {
                    isAdmin = false;
                }
                return done(null, user);
            });
        });
    }
));

app.use(express.json());
app.use(session({ secret: 'nyan cat', resave: false, saveUninitialized: false }));
app.use(body.urlencoded({ extended: true }));
app.use(body.json());
app.use(cors());
app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', '*');
    next();
  });
app.use(passport.initialize());
app.use(passport.session());

function ensureAuthenticated(req, res, next) {
    if ( req.isAuthenticated() ) { return next(); }
    res.redirect('login');
}

app.get('/', function(req, res) {
    res.sendFile('public/login.html', { root: __dirname });
})

app.get('/login', function(req, res) {
    res.sendFile('public/login.html', { root: __dirname });
});

app.post('/login', passport.authenticate('local',
    { successRedirect: 'home', failureRedirect: 'login' }
));

app.get('/logout', function(req, res) {
    isAdmin = false;
    req.logout();
    res.redirect('login');
});

app.get('/home', ensureAuthenticated, function(req, res) {
    if ( isAdmin ) {
        res.sendFile('public/adminHome.html', { root: __dirname });
    } else {
        res.sendFile('public/home.html', { root: __dirname });
    }
});

app.get('/websiteMetrics', ensureAuthenticated, function(req, res) {
    res.sendFile('public/websiteMetrics.html', { root: __dirname });
});

app.get('/osloadtimes', ensureAuthenticated, function(req, res) {
    res.sendFile('public/osloadtimes.html', { root: __dirname });
});

app.get("/users", ensureAuthenticated, function (req, res) {
    if ( isAdmin ) {
        res.sendFile('public/users.html', { root: __dirname });
    } else {
        res.sendFile('public/unauthorized.html', { root: __dirname });
    }
});

// CRUD
app.get("/userapi", ensureAuthenticated, function (req, res) {
    connection.query(
        "SELECT * FROM users",
        function (error, results, fields) {
            if (error) throw error;
            if ( results.length === 0 ) {
                res.status(404);
                res.send("There are no users");
            } else {
                res.status(200);
                res.send(results);
            }
        }
    );
});

app.get("/userapi/:id", function (req, res, next) {
    let id = req.params.id;
    connection.query(
        `SELECT * FROM users WHERE id=?`,
        id,
        function (error, results, fields) {
            if (error) throw error;
            if ( results.length === 0 ) {
                res.status(404);
                res.send("User does not exist");
            } else {
                res.status(200);
                res.send(results);
            }
        }
    );
});

app.post("/userapi", function (req, res, next) {
    let body = req.body;
    bcrypt.genSalt(10, function(err, salt) {
        if (err) return next(err);
        bcrypt.hash(body.password, salt, function(err, hash) {
            if (err) return next(err);
            body.password = hash;
            connection.query(
                `INSERT INTO users SET ?`,
                body,
                function (error, results, fields) {
                    if (error) throw error;
                    res.status(201);
                    res.send(body);
                }
            );
        });
    });
});

app.delete("/userapi/:id", function (req, res, next) {
    let id = req.params.id;
    connection.query(
        `DELETE FROM users WHERE id=?`,
        id,
        function (error, results, fields) {
            if (error) throw error;
            if (results.affectedRows != 0) {
                res.status(200);
                res.send();
            } else {
                res.status(404);
                res.send();
            }
        }
    );
});

app.patch("/userapi/:id", function (req, res, next) {
    let body = req.body;
    let id = req.params.id;
    if(body.password != null) {
        bcrypt.genSalt(10, function(err, salt) {
            if (err) return next(err);
            bcrypt.hash(body.password, salt, function(err, hash) {
                if (err) return next(err);
                body.password = hash;
                connection.query(
                    `UPDATE users SET ? WHERE id=?`,
                    [body, id],
                    function (error, results, fields) {
                        if (error) throw error;
                        res.status(200);
                        res.send(body);
                    }
                );
            });
        });
    } else {
        connection.query(
            `UPDATE users SET ? WHERE id=?`,
            [body, id],
            function (error, results, fields) {
                if (error) throw error;
                res.status(200);
                res.send(body);
            }
        );
    }
});

app.listen(port);