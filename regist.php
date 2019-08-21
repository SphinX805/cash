<?php
if(isset($_POST["submit"])){
$pass = strip_tags($_POST["pass"]);
$mail = strip_tags($_POST["mail"]);
$name = strip_tags($_POST["name"]);
$pass1 = strip_tags($_POST["pass1"]);
$codemail = generateSTR();
$mailstatus = "false";
$salt = "d9DqJluFQH3N2jE8LQvd";

	if(($pass != " ")&&($pass != "")&&($pass != NULL)){
 if($pass == $pass1){
$passmd5 = md5($pass.$salt);
require "bd.php";
$result = $bd -> query("INSERT INTO `users` (`id`, `mail`, `name`, `pass`, `mailcode`, `mailstatus`, `rub`, `usd`, `btc`) VALUES (NULL, '".$mail."', '".$name."', '".$passmd5."', '".$codemail."', '".$mailstatus."', '0,00', '0.00', '0.00');");
$bd -> close();
if ($result == 1){
	session_set_cookie_params(21600);
	session_start();
	pochta($mail, $name, $pass, $codemail);
	$errormail = "";
	$_SESSION["regerrormail"] = $errormail;
	$_SESSION["reg"] = true;
	header('Location: index.php');




}else{
	session_set_cookie_params(21600);
	session_start();
	$errormail = "эта почта уже зарегестрирована";
	$_SESSION["regerrormail"] = $errormail;
	$_SESSION["reg"] = false;
	header('Location: reg.php');
}





}else{
	session_set_cookie_params(21600);
	session_start();
	$errorpass = "пароли не совпадают";
	$_SESSION["regerrorPASS"] = $errorpass;
	$_SESSION["reg"] = false;
	header('Location: reg.php');
}

}else{session_set_cookie_params(21600);
	session_start();
	$errorpass = "введите корректный пароль";
	$_SESSION["regerrorPASS"] = $errorpass;
	$_SESSION["reg"] = false;
	header('Location: reg.php');}


}else{
	session_set_cookie_params(21600);
	session_start();
	$_SESSION["reg"] = false;
	header('Location: reg.php');
}





function pochta($mail, $name, $pass, $codemail){

$to  = "<".$mail.">"; 

$subject = "Регистрация на сервисе DOGE CASH"; 

$message = "<p>Здравствуйте, ".$name." !</p> <br>Ваш логин: ".$mail."  <br> Ваш пароль: ".$pass."<br> <br> Ваш BTC счет: 17ghA6SYe4x3joxqhkDTAJy14ezPENhmBB<br><br>Это письмо отправлено роботом, отвечать на него не нужно! <br> <br>Нажмите на кнопку ниже чтобы подтвердить свою почту <br> <br><a style = \"background-color: #6D43FF; padding: 10px 15px; border-radius: 12px; font-weight: bold; font-size: 20px; line-height: 24px; letter-spacing: 1px; margin-bottom: 20px; color: #fff; text-decoration: none;\" href=\"http://cash.sphinxs.ru/mail.php?code=".$codemail."\">Подтвердить почту</a><br><br>Если вы получили это сообщение по ошибке и не регистрировались на нашем сервисе,<br>то просто проигнорируйте это сообщение!<br>";


$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
$headers .= "From: SPHINXS-BOT <no.reply.bot@sphinxs.ru>\r\n"; 
$headers .= "Reply-To: no.reply.bot@sphinxs.ru\r\n"; 

mail($to, $subject, $message, $headers);





}



function generateSTR($length = 10){
$chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
$numChars = strlen($chars);
$string = '';
for ($i = 0; $i < $length; $i++) {
$string .= substr($chars, rand(1, $numChars) - 1, 1);
}
return $string;
}

?>