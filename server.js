var app = require("http").createServer();

var io = require("socket.io")(app);

io.on('connection',function (socket){
  console.log("A user has entered the server");

  socket.on("client message", function(data) {
    console.log("Client message received: " + data);

    io.emit("server message", data);
  });
});

app.listen(8000, function(){
  console.log("server started.")
});
