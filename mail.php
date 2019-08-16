<?php
session_set_cookie_params(21600);
session_start();
if($_SESSION["reg"] == true){
require "bd.php";
$code1 = $_GET["code"];
$resu = $bd -> query("SELECT `id` FROM `users` WHERE `mailcode` = '".$code1."'");
$id = vivod($resu);
$uslov = $bd -> query("UPDATE `users` SET `mailstatus` = 'true' WHERE `users`.`id` = ".$id.";");

if($uslov == 1){
	
$_SESSION["message"] = "Почта успешно подтверждена!";
$_SESSION["maiSTAT"] = true;
header('Location: account/promej/good.php');

}else{
$_SESSION["maiSTAT"] = false;	
$_SESSION["message"] = "ошибка при подтверждении";
header('Location: account/promej/error.php');

}



}else{$_SESSION["maiSTAT"] = false; $_SESSION["message"] = "сначала зарегистрируйтесь";header('Location: account/promej/bad.php');}






function vivod($result_set){

	while(($row = $result_set->fetch_assoc()) != false){
		return $row["id"];
		
	}
}
?>