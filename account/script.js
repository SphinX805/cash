window.onload = function() {
var btn = document.body.querySelector(".chat-btn"),
chat = document.body.querySelector(".chat"),
close = document.body.querySelector(".close");

chat.style.display = "none";

function openF() {
	chat.style.display = "block";
	btn.style.display = "none";
}

function closeF() {
	chat.style.display = "none";
	btn.style.display = "inline-block";
}

var chatcontent = document.body.querySelector(".chat").innerHtml;

close.onclick = closeF;

btn.onclick = openF;
}