// server.js file
var jsonServer = require('json-server');

// Returns an Express server
var server = jsonServer.create();

// Returns an Express router
var router = jsonServer.router('db.json');

// Set default middlewares (logger, static, cors and no-cache)
var middlewares = jsonServer.defaults();

server.use(middlewares);

server.use(router);

server.listen(3000);