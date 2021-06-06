const express = require("express");
const app = express();
const mysql = require("mysql");
const bodyParser = require('body-parser');
var cors = require('cors');

//Use the Express server npm package
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());
app.use(cors())

//Connect to the MySql database
var connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "cse135Password",
    database: "hw3"
});
connection.connect();

app.get("/", (req, res) => {
    res.send("This is the JSON REST API");
});

app.get("/static", function (req, res, next) {
    connection.query(
        "SELECT * FROM static",
        function (error, results, fields) {
            if (error) throw error;
            if ( results.length === 0 ) {
                res.status(404);
                res.send("Static is empty");
            } else {
                res.status(200);
                res.send(results);
            }
        }
    );
});

app.get("/static/:id", function (req, res, next) {
    let id = req.params.id;
    connection.query(
        `SELECT * FROM static WHERE id=?`,
        id,
        function (error, results, fields) {
            if (error) throw error;
            if ( results.length === 0 ) {
                res.status(404);
                res.send("Entry does not exist");
            } else {
                res.status(200);
                res.send(results);
            }
        }
    );
});

app.post("/static", function (req, res, next) {
    let body = req.body;
    connection.query(
        `INSERT INTO static SET ?`,
        body,
        function (error, results, fields) {
            if (error) throw error;
            res.status(201);
            res.send(body);
        }
    );
});

app.delete("/static/:id", function (req, res, next) {
    let id = req.params.id;
    connection.query(
        `DELETE FROM static WHERE id=?`,
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

app.put("/static/:id", function (req, res, next) {
    let body = req.body;
    let id = req.params.id;
    connection.query(
        `UPDATE static SET ? WHERE id=?`,
        [body, id],
        function (error, results, fields) {
            if (error) throw error;
            res.status(200);
            res.send(body);
        }
    );
});

app.get("/performance", function (req, res, next) {
    connection.query(
        "SELECT * FROM performance",
        function (error, results, fields) {
            if (error) throw error;
            if ( results.length === 0 ) {
                res.status(404);
                res.send("Performance is empty");
            } else {
                res.status(200);
                res.send(results);
            }
        }
    );
});

app.get("/performance/:id", function (req, res, next) {
    let id = req.params.id;
    connection.query(
        `SELECT * FROM performance WHERE id=?`,
        id,
        function (error, results, fields) {
            if (error) throw error;
            if ( results.length === 0 ) {
                res.status(404);
                res.send("Entry does not exist");
            } else {
                res.status(200);
                res.send(results);
            }
        }
    );
});

app.post("/performance", function (req, res, next) {
    let body = req.body;
    connection.query(
        `INSERT INTO performance SET ?`,
        body,
        function (error, results, fields) {
            if (error) throw error;
            res.status(201);
            res.send(body);
        }
    );
});

app.delete("/performance/:id", function (req, res, next) {
    let id = req.params.id;
    connection.query(
        `DELETE FROM performance WHERE id=?`,
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

app.put("/performance/:id", function (req, res, next) {
    let body = req.body;
    let id = req.params.id;
    connection.query(
        `UPDATE performance SET ? WHERE id=?`,
        [body, id],
        function (error, results, fields) {
            if (error) throw error;
            res.status(200);
            res.send(body);
        }
    );
});

app.get("/activity", function (req, res, next) {
    connection.query(
        "SELECT * FROM activity",
        function (error, results, fields) {
            if (error) throw error;
            if ( results.length === 0 ) {
                res.status(404);
                res.send("Activity is empty");
            } else {
                res.status(200);
                res.send(results);
            }
        }
    );
});

app.get("/activity/:id", function (req, res, next) {
    let id = req.params.id;
    connection.query(
        `SELECT * FROM activity WHERE id=?`,
        id,
        function (error, results, fields) {
            if (error) throw error;
            if ( results.length === 0 ) {
                res.status(404);
                res.send("Entry does not exist");
            } else {
                res.status(200);
                res.send(results);
            }
        }
    );
});

app.post("/activity", function (req, res, next) {
    let body = req.body;
    connection.query(
        `INSERT INTO activity SET ?`,
        body,
        function (error, results, fields) {
            if (error) throw error;
            res.status(201);
            res.send(body);
        }
    );
});

app.delete("/activity/:id", function (req, res, next) {
    let id = req.params.id;
    connection.query(
        `DELETE FROM activity WHERE id=?`,
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

app.put("/activity/:id", function (req, res, next) {
    let body = req.body;
    let id = req.params.id;
    connection.query(
        "UPDATE activity SET ? WHERE id=?",
        [body, id],
        function (error, results, fields) {
            if (error) throw error;
            res.status(200);
            res.send(body);
        }
    );
});

app.listen(3000);
