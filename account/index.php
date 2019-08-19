<?php
/*session_set_cookie_params(21600);
session_start();
$status = $_SESSION["auth"];
$id = $_SESSION["id"];
if($status != true){
header('Location: ../index.php');
}else{
require "../bd.php";
$result_set = $bd -> query("SELECT `balance` FROM `users` WHERE `id` = '".$id."'");
$balance = vivodB($result_set);
$bd -> close();

}

function vivodB($result_set){

	while(($row = $result_set->fetch_assoc()) != false){
		return $row["balance"];
		
	}
}*/
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
				<div class="balance"><a><?php /* echo $balance.".00 RUB"; */ ?></a></div> <!-- SANYA BLYAT KOSHELEK -->
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

	<div class="b-status">
		<div class="balance-block">
			<a href="#"><i class="fab fa-btc"></i>Bitcoin <i style="font-size: 14px; color: blue;" class="fas fa-arrow-down"></i></a> 
			<!-- ТУТ БАЛАНС --><p><strong>0.000000000</strong> BTC</p>
			<div class="down"><a class="down-btc" href="#">aaaa</a></div>
		</div>
		<div class="balance-block">
			<a href="#"><i style="color: green;" class="fas fa-dollar-sign"></i>Доллары <i style="font-size: 14px; color: blue;" class="fas fa-arrow-down"></i></a>
			<!-- ТУТ БАЛАНС --><p><strong>0.00</strong> USD</p>
			<div class="down"><a href="#"><i class="fas fa-cart-arrow-down"></i> Пополнить</a> <a href="#"><i class="fas fa-wallet"></i> Вывести</a></div>
		</div>
		<div class="balance-block"><a href="#"><i style="color: #2FA6E2;" class="fas fa-ruble-sign"></i>Рубли <i style="font-size: 14px; color: blue;" class="fas fa-arrow-down"></i></a>
			<!-- ТУТ БАЛАНС --><p><strong>0.00</strong> RUB</p>
			<div class="down"><a href="#"><i class="fas fa-cart-arrow-down"></i> Пополнить</a> <a href="#"><i class="fas fa-wallet"></i> Вывести</a></div>
		</div>
	</div>


	</div>
	<div class="chat">
	<a href="#" class="close">Close Chat</a>
	texttexttext
	<form action="chat.php">
		<input type="text" placeholder="...">
		<button><i class="fas fa-paper-plane"></i></button>
	</form>
	</div>
	<div class="chat-btn"><a href="#">Чат <i class="fas fa-comments"></i></a></div>
</body>
</html>