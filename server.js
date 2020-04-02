var app = require("http").createServer();

var io = require("socket.io")(3000);

const users = {}


io.on('connection',socket => {
  // console.log("A user has entered the server");

  socket.on("new-user", name =>{
    users[socket.id] = name
    socket.broadcast.emit('user-connected', name)
    });
  socket.on('messageSent', message => {
    socket.broadcast.emit('chat-message',message)
  })
  socket.on('disconnect', () => {
    socket.broadcast.emit('user-disconnected', users[socket.id])
    delete users[socket.id]
  })
});

app.listen(8000, function(){
  console.log("server started")
});
