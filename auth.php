<?php 
session_set_cookie_params(21600);
session_start();
$pass = $_POST["pass"];
$name = $_POST["name"];
$salt = "d9DqJluFQH3N2jE8LQvd";
$_SESSION["authERROR"] = "";
require "bd.php";
$result_set = $bd -> query("SELECT `pass` FROM `users` WHERE `name` = '".$name."'");
$truepass = vivod1($result_set);
$resu = $bd -> query("SELECT `id` FROM `users` WHERE `name` = '".$name."'");
$id = vivod11($resu);
$_SESSION["id"] = $id;
$bd -> close();
if(md5($pass.$salt) == $truepass)
{
	$_SESSION["auth"] = true;
	$_SESSION["authERROR"] = "";
	header('Location: /account/index.php');
}else{
	$_SESSION["auth"] = false;
	$_SESSION["authERROR"] = "incorrect name or password";
	header('Location: index.php');
}





function vivod22($result_set){

	while(($row = $result_set->fetch_assoc()) != false){
		return $row["mail"];
		
	}
}


function vivod11($result_set){

	while(($row = $result_set->fetch_assoc()) != false){
		return $row["id"];
		
	}
}

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