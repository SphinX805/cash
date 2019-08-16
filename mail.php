<?php
require "bd.php";
$code1 = $_GET["code"];
$resu = $bd -> query("SELECT `id` FROM `users` WHERE `mailcode` = '".$code1."'");
$id = vivod($resu);
$bd -> query("UPDATE `users` SET `mailstatus` = 'true' WHERE `users`.`id` = ".$id.";");

function vivod($result_set){

	while(($row = $result_set->fetch_assoc()) != false){
		return $row["id"];
		
	}
}
?>