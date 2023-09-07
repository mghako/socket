const express = require('express');
const app = express();
const server = require('http').createServer(app);


const io = require('socket.io')(server, {
    cors: { 
        origin: "http://socket.test"
    }
});


io.on('connection', (socket) => {
	const sendRandomNumber = async () => {
		const response = await fetch("http://socket.test/api/random-number");
		const data = await response.json();
        socket.emit('send-random-number', { response: data });
    };
    const interval = setInterval(sendRandomNumber, 3000);

    socket.on('disconnect', (socket) => {
        clearInterval(interval);
        console.log('Disconnect');
    });
});

server.listen(1234, () => {
    console.log('Server is running');
});