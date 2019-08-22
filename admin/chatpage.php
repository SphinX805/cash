<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
	<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<title>Adm Chat</title>
</head>
<body>
	<div class="chat-window">
		<h2>Chat</h2>
	<form action="admchat.php" metod="POST">
		<input type="text" placeholder="...">
		<button><i class="fas fa-paper-plane"></i></button>
	</form>
	</div>

	<style>
		body {
			margin: 0;
			background-color: #000000;
			background-image: url("https://www.transparenttextures.com/patterns/scribble-light.png");
		}

		.chat-window {
			background-color: #c0c0c0;
			margin-left: calc(50% - 150px);
			margin-top: 50px;
			position: relative;
			border: 1px solid #161616;
			border-radius: 8px;
			display: inline-block;
			width: 300px;
			height: auto;
			min-height: 400px;
		}

		.chat-window h2 {
			margin: 5px 0 0 0;
			width: 100%;
			text-align: center;
			display: inline-block;
		}

		.chat-window form {
			width: 90%;
			margin-left: 5%;
			position: absolute;
			bottom: 10px;
		}

		.chat-window form input {
			width: 80%;
		}

		form button {
			display: inline-block;
		}

	</style>
</body>
</html>