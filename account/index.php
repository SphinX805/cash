<?php
session_set_cookie_params(21600);
session_start();
$status = $_SESSION["auth"];
$id = $_SESSION["id"];
if($status != true){
header('Location: ../index.php');
}else{
require "../bd.php";
$result_set1 = $bd -> query("SELECT `rub` FROM `users` WHERE `id` = '".$id."'");
$result_set2 = $bd -> query("SELECT `usd` FROM `users` WHERE `id` = '".$id."'");
$result_set3 = $bd -> query("SELECT `btc` FROM `users` WHERE `id` = '".$id."'");
$rub = vivodB($result_set1);
$usd = vivodB1($result_set2);
$btc = vivodB2($result_set3);
$bd -> close();

}

function vivodB($result_set){

	while(($row = $result_set->fetch_assoc()) != false){
		return $row["rub"];
		
	}
}

function vivodB1($result_set){

	while(($row = $result_set->fetch_assoc()) != false){
		return $row["usd"];
		
	}
}

function vivodB2($result_set){

	while(($row = $result_set->fetch_assoc()) != false){
		return $row["btc"];
		
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
	<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
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
		<div class="content-menu"><a href="./trade/index.php">Обменять</a></div>
		<div class="content-menu"><a href="#">История</a></div>
		<div class="content-menu"><a href="#">Настройки</a></div>
	</div>

	<div class="b-status">
		<div class="balance-block">
			<a href="#"><i class="fab fa-btc"></i>Bitcoin <i style="font-size: 14px; color: blue;" class="fas fa-arrow-down"></i></a> 
			<!-- ТУТ БАЛАНС --><p><strong><?php  echo $btc;  ?></strong> BTC</p>
			<div class="down"><a class="down-btc" href="#">aaaa</a></div>
		</div>
		<div class="balance-block">
			<a href="#"><i style="color: green;" class="fas fa-dollar-sign"></i>Доллары <i style="font-size: 14px; color: blue;" class="fas fa-arrow-down" onclick=""></i></a>
			<!-- ТУТ БАЛАНС --><p><strong><?php  echo $usd;  ?></strong> USD</p>
			<div class="down"><a href="#"><i class="fas fa-cart-arrow-down"></i> Пополнить</a> <a href="#"><i class="fas fa-wallet"></i> Вывести</a></div>
		</div>
		<div class="balance-block"><a href="#"><i style="color: #2FA6E2;" class="fas fa-ruble-sign"></i>Рубли <i style="font-size: 14px; color: blue;" class="fas fa-arrow-down"></i></a>
			<!-- ТУТ БАЛАНС --><p><strong><?php  echo $rub;  ?></strong> RUB</p>
			<div class="down"><a href="#"><i class="fas fa-cart-arrow-down"></i> Пополнить</a> <a href="#"><i class="fas fa-wallet"></i> Вывести</a></div>
		</div>
		<div class="last2links">
			<a href="#">Получение перевода</a><br>
			<a href="#" style="background-color: #5BC0DE; padding: 5px 8px; font-size: 17px; border-radius: 8px;">Виртуальная карта 4280 **** **** ****</a>
		</div>
	</div>


	</div>
	<!-- content end -->
	<div class="partner">Our partner:<br><img src="/account/sber.png" width="200px" height="60px" margin="10px 0"></div>
	<div class="chat">
	<a href="#" class="close">Close Chat</a>
	<!-- ЧАТ -->
	<form action="chat.php" method="POST">
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
	<?php /* require "chat.php"; */ ?>
</body>
</html>