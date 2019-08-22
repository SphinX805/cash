<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
	<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="../style.css">
	<script src="script.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<title>Account</title>
</head>
<body>
	<header>
	<div class="head">

		<div class="h-link"><a href="#">DogeCash.ru</a></div>
		<div class="h-link"><a href="#">Пополнение<i class="fas fa-plus"></i></a></div>
				<div class="balance"><a><?php  echo $rub.".00 RUB";  ?></a></div> <!-- SANYA BLYAT KOSHELEK -->
		<div class="h-link"><a href="#">Сервисы<i class="fas fa-list"></i></a></div>
		<form action="exit.php" method="POST"><div class="h-link exit"><button type="submit" name="done" value="Выход">Выход</button></form></div>
	</div>
	</header>

	<div class="content">
	<div class="menu-div">
		<div class="content-menu"><a href="#">Баланс</a></div>
		<div class="content-menu"><a href="#">Ставки</a></div>
		<div class="content-menu"><a href="#">Вывести</a></div>
		<div class="content-menu"><a href="#">Обменять</a></div>
		<div class="content-menu"><a href="#">История</a></div>
		<div class="content-menu"><a href="#">Настройки</a></div>
	</div>

	<div class="trade">
		<p>Обмен валют и криптовалют</p>
		<div class="commision">Коммисия обмена: 0.7%</div>
		<form action="trade.php" method="POST">
			<span>Сумма</span>
			<input type="text" name="tradeValue">
			<span>Валюта</span>
			<select class="form-control input-lg" id="payFormModal-type" name="what"><option value="1">Обменять BTC на RUB</option><option value="2">Обменять BTC на USD</option><option value="3">Обменять RUB на BTC</option><option value="4">Обменять RUB на USD</option><option value="5">Обменять USD на RUB</option></select><br>
			<button>Далее</button>
		</form>
	</div>
	
	<style>
		.trade {
			margin-top: 80px;
			padding: 20px;
			border: 1px solid #c0c0c0;
			border-radius: 8px;
			box-shadow: 0 0 10px #000;
			text-align: center;
			color: #000;
			width: calc(70% - 40px);
			margin-left: 15%;
		}

		.trade span {
			margin: 5px 0;
			display: block;
			width: 100%;
			font-weight: bold;
			font-size: 20px;
		}

		.trade input, select {
			width: 70%;
			border: 1px solid #c0c0c0;
			padding: 5px 0;
			font-size: 20px;
			border-radius: 14px;
		}

		.trade button {
			margin-top: 25px;
			padding: 5px 15px;
			border-radius: 20px;
			border: none;
			background-color: #FFDB00;
			color: #0c0c0c;
			font-size: 20px;
			font-weight: bold;
		}

		.trade p {
			display: inline-block;
			width: 100%;
			border-bottom: 1px solid #c0c0c0;
		}

		.trade form {
			display: block;
			width: 100%;
			margin: 0;
		}


	</style>

	</div>
	<!-- content end -->
	<div class="partner">Our partner:<br><img src="/account/sber.png" width="200px" height="60px" margin="10px 0"></div>
	<div class="chat">
	<a href="#" class="close">Close Chat</a>
	<!-- ЧАТ -->
	<form action="chat.php">
		<input type="text" placeholder="...">
		<button><i class="fas fa-paper-plane"></i></button>
	</form>
	</div>
	<div class="chat-btn"><a href="#">Чат <i class="fas fa-comments"></i></a></div>
	<div class="footer-c">
		<ul>
			<li><a href="#"><i class="fas fa-info-circle"></i> О сервисе</a></li>
			<li><a href="#"><i class="fas fa-info-circle"></i> Политика конфиденциальности</a></li>
			<li><a href="#"><i class="fas fa-info-circle"></i> Гарантии платёжного агрегатора</a></li>
		</ul>
	</div>
	<div class="footer-c"></div>
</body>
</html>