// Requires Express to create server and Socket.io for the socket connetions
var express = require('express'),
    app = express(),
    server = require('http').createServer(app),
    io = require ('socket.io').listen(server);
var path = require('path');
var publicPath = path.resolve(__dirname, 'public');
users = [];
connections = [];
// Directs Express to static files for styling like JS, Images and CSS
app.use('/public',express.static(publicPath));
// Directs socket to the socket.html page
app.get('/', function(req, res) {
  res.sendFile(__dirname + '/socket.html');
});
// litens on port 3000 for new users and messages
server.listen(3000);
// sends data to the console log 
io.sockets.on('connection', function(socket){
	// All events we need to emit will need to go in here
	connections.push(socket);
	console.log('Connected: %s sockets connected', connections.length);

	// Disconnect
	socket.on('disconnect', function(data){
		users.splice(users.indexOf(socket.username), 1);
		updateUsernames();
		connections.splice(connections.indexOf(socket), 1);
	    console.log('Disconnected: %s sockets connected', connections.length);
	});

	// Send Message
	socket.on('send message', function(data){
		io.sockets.emit('new message', {msg: data, user: socket.username});
	});

	// New User
	socket.on('new user', function(data, callback){
		callback(true);
		socket.username = data;
		users.push(socket.username);
		updateUsernames();
	});

	function updateUsernames(){
		io.sockets.emit('get users', users);
	}
});
