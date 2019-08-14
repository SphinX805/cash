<?php 
if(isset($_POST["submit"])){
$pass = strip_tags($_POST["pass"]);
$name = strip_tags($_POST["name"]);
$pass1 = strip_tags($_POST["pass1"]);
$salt = "d9DqJluFQH3N2jE8LQvd";

	if(($pass != " ")&&($pass != "")&&($pass != NULL)){
 if($pass == $pass1){
$passmd5 = md5($pass.$salt);
require "bd.php";
$result = $bd -> query("INSERT INTO `users` (`id`, `name`, `pass`) VALUES (NULL, '".$name."', '".$passmd5."');");
$bd -> close();
if ($result == 1){
	session_set_cookie_params(60);
	session_start();
	$errorname = "";
	$_SESSION["regerrorNAME"] = $errorname;
	$_SESSION["auth"] = true;
	header('Location: index.html');




}else{
	session_set_cookie_params(60);
	session_start();
	$errorname = "данное имя уже занято";
	$_SESSION["regerrorNAME"] = $errorname;
	$_SESSION["auth"] = false;
	header('Location: reg.php');
}





}else{
	session_set_cookie_params(60);
	session_start();
	$errorpass = "пароли не совпадают";
	$_SESSION["regerrorPASS"] = $errorpass;
	$_SESSION["auth"] = false;
	header('Location: reg.php');
}

}else{session_set_cookie_params(60);
	session_start();
	$errorpass = "введите корректный пароль";
	$_SESSION["regerrorPASS"] = $errorpass;
	$_SESSION["auth"] = false;
	header('Location: reg.php');}


}else{
	session_set_cookie_params(60);
	session_start();
	$_SESSION["auth"] = false;
	header('Location: reg.php');
}










?>