<?php 
$pass = $_POST["pass"];
$name = $_POST["name"];
$salt = "d9DqJluFQH3N2jE8LQvd";
require "bd.php";
$result_set = $bd -> query("SELECT `pass` FROM `users` WHERE `name` = '".$name."'");
$truepass = vivod1($result_set);
if(md5($pass.$salt) == $truepass)
{echo "good";}else{echo("incorrect password");}










function vivod1($result_set){

	while(($row = $result_set->fetch_assoc()) != false){
		return $row["pass"];
		
	}
}

function vivod2($result_set){

	while(($row = $result_set->fetch_assoc()) != false){
		return $row["name"];
		
	}
}


?>