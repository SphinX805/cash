<?php
session_set_cookie_params(21600);
session_start();
$status = $_SESSION["auth"];
$id = $_SESSION["id"];
if($status != true){
header('Location: ../index.php');
}else{
require "../bd.php";
$result = $bd -> query("SELECT `balance` FROM `users` WHERE `id` = '".$id."'");
$balance = vivodB($result);




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
		<div class="h-link"><a href="#"><i class="fas fa-plus"></i>Пополнение</a></div>
				<div class="balance"><?php echo $balance; ?> RUB</div> <!-- SANYA BLYAT KOSHELEK -->
		<div class="h-link"><a href="#">Сервисы</a></div>
		<div class="h-link exit"><a href="#">Выход<i class="fas fa-sign-out-alt"></i></a></div>
	</div>
	</header>
</body>
</html>