<?php
session_set_cookie_params(21600);
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
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
	<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<title>Account</title>
</head>
<body>
	<header>
	<div class="head">

		<div class="h-link"><a href="#">DogeCash.ru</a></div>
		<div class="h-link"><a href="#">Пополнение<i class="fas fa-plus"></i></a></div>
				<div class="balance"><a><?php echo $balance.".00 RUB"; ?></a></div> <!-- SANYA BLYAT KOSHELEK -->
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
	</div>

</body>
</html>