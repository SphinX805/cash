<?php
session_set_cookie_params(21600);
session_start();
$status = $_SESSION["auth"];
$id = $_SESSION["id"];
if($status == true){
session_unset();
session_destroy();
header('Location: ../index.php');
}else{header('Location: ../index.php');}














?>