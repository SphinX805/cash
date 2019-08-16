<?php
session_set_cookie_params(21600);
session_start();
$status = $_SESSION["maiSTAT"];
$message = $_SESSION["message"];
if($status == true){
//sleep(10);
//header('Location: index.php');
}else{
//sleep(10);
//header('Location: ../reg.php');
}





?>






<p align="center"> <?php echo $message; //sleep(10); ?> </p>