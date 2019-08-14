<!DOCTYPE html>
<html>
<head>
	<title>Reg</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
	<script src="https://kit.fontawesome.com/92122ceae8.js"></script>
</head>
<body>
	
	<form method="post" action="">
		<div class="logo"><i class="fas fa-wallet"></i>DogeCash</div>
		<p>Логин:</p><input type="text" placeholder="cash@gmail.com"><br>
		<p>Пароль:</p><input type="password"><br>
		<p>Повтор пароля:</p><input type="password"><br>
		<center><input type="submit" value="Регистрация" class="sub-btn"><i class="fas fa-arrow-right"></i></center>
	</form>

	<style>
		.logo {
			width: 100%;
			text-align: center;
			color: #fff;
			font-weight: bold;
			font-size: 24px;
			letter-spacing: 1px;
		}

		.logo i {
			color: #fff;
			font-size: 24px;
			transition: 1s;
		}

		.logo:hover i {
			transform: rotate(360deg);
		}

		body {
			background: url("./images/black-orchid.png") repeat #212121;
			color: #828282;
		}

		p {
			display: inline-block;
			font-weight: bold;
		}

		form {
			display: inline-block;
			width: 300px;
			position: absolute;
			top: calc(50% - 175px);
			left: calc(50% - 250px);
		}
		
		form i {
			position: relative;
			left: -22px;
			top: 3px;
			color: #0c0c0c;
			font-size: 17px;
		}

		input {
			float: right;
			margin-top: 15px;
			padding: 5px;
			border: 0;
			border-radius: 5px;
		}

		.sub-btn {
			float: none;
			padding: 8px 30px 8px 10px;
			font-weight: bold;
			border-radius: 12px;
		}
	</style>
</body>
</html>