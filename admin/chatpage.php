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

	<div class="users">
		<form action="users" method="POST">
			<ul>
				<li><a href="#">user1</a></li>
				<li class="active"><a href="#">user2</a></li>
				<li><a href="#">user3</a></li>
				<li><a href="#">user4</a></li>
				<li><a href="#">user5</a></li>
			</ul>
		</form>
	</div>

	<style>
		body {
			margin: 0;
			background-color: #000000;
			background-image: url("https://www.transparenttextures.com/patterns/scribble-light.png");
		}

		.chat-window {
			color: #fff;
			margin-left: calc(25% - 150px);
			margin-top: 50px;
			position: relative;
			border: 1px solid #fff;
			box-shadow: 0 0 20px #000;
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

		.users {
			width: 200px;
			position: absolute;
			right: 80px;
			top: 60px;
			border-radius: 10px;
			border: 1px solid #fff;
		}

		.active {
			background-color: #0c0c0c;
			font-weight: normal;
			margin: 10px 0;
		}

		.users form {
			display: inline-block;
			width: 100%;
		}

		.users ul {
			padding-left: 0;
			display: inline-block;
			margin: 0;
			width: 100%;
			list-style-type: none;
		}

		.users ul li {
			display: inline-block;
			margin: 0;
			width: 100%;
		}

		.users li a {
			margin: 0;
			padding-bottom: 5px;
			width: 100%;
			text-align: center;
			margin-top: 5px;
			border-bottom: 1px solid #c0c0c0;
			display: inline-block;
			color: #fff;
			text-decoration: none;
			font-weight: bold;
		}

		form button {
			display: inline-block;
		}

	</style>
</body>
</html>