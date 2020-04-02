var socket = io.connect("http://localhost:3000");

const messageContainer = document.getElementById('chatForm')
const messageForm = document.getElementById('sendMessage')
const messageInput = document.getElementById('message')

const name = prompt('please enter your temporary alias for this chat:')
appendMessage('You joined')
socket.emit('new-user', name)

socket.on("chat-message", data => {
<<<<<<< HEAD
  appendMessage(name + ': ' +data)
});

socket.on('user-connected', name => {
  appendMessage(name + ' connected')
})

socket.on('user-disconnected', name => {
  appendMessage(name + ' disconnected')
})

messageForm.addEventListener('submit', e => {
  e.preventDefault()
  const message = messageInput.value
  appendMessage('You: ' + message)
  socket.emit('messageSent', message)
  messageInput.value = ''
=======
	appendMessage(name + ': ' +data)
});

socket.on('user-connected', name => {
	appendMessage(name + ' connected')
})

socket.on('user-disconnected', name => {
	appendMessage(name + ' disconnected')
})

messageForm.addEventListener('submit', e => {
	e.preventDefault()
	const message = messageInput.value
	appendMessage('You: ' + message)
	socket.emit('messageSent', message)
	messageInput.value = ''
>>>>>>> 5c7e735768ee9f373c94cb67fe4990240de1ed76

})

function appendMessage(message)
{
<<<<<<< HEAD
  const messageElement = document.createElement('div')
  messageElement.innerText = message
  messageContainer.append(messageElement)
=======
	const messageElement = document.createElement('div')
	messageElement.innerText = message
	messageContainer.append(messageElement)
>>>>>>> 5c7e735768ee9f373c94cb67fe4990240de1ed76
}
