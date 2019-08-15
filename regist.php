<?php
if(isset($_POST["submit"])){
$pass = strip_tags($_POST["pass"]);
$mail = strip_tags($_POST["mail"]);
$name = strip_tags($_POST["name"]);
$pass1 = strip_tags($_POST["pass1"]);
$salt = "d9DqJluFQH3N2jE8LQvd";

	if(($pass != " ")&&($pass != "")&&($pass != NULL)){
 if($pass == $pass1){
$passmd5 = md5($pass.$salt);
require "bd.php";
$result = $bd -> query("INSERT INTO `users` (`id`, `mail`, `name`, `pass`) VALUES (NULL, '".$mail."', '".$name."', '".$passmd5."');");
$bd -> close();
if ($result == 1){
	session_set_cookie_params(60);
	session_start();
	$errormail = "";
	$_SESSION["regerrormail"] = $errormail;
	$_SESSION["auth"] = true;
	header('Location: index.html');




}else{
	session_set_cookie_params(60);
	session_start();
	$errormail = "данное имя уже занято";
	$_SESSION["regerrormail"] = $errormail;
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
}else{header('Location: reg.php');}





function pochta(){

$to  = "<mail@example.com>"; 

$subject = "Регистрация на сервисе DOGE CASH"; 

$message = ' <p>Здравствуйте, '.$name.' !</p> </br>Ваш логин: '.$mail.'  </br></br>';

$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
$headers .= "From: От кого письмо <from@example.com>\r\n"; 
$headers .= "Reply-To: reply-to@example.com\r\n"; 

mail($to, $subject, $message, $headers);





}




?>