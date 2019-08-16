<?php
session_set_cookie_params(21600);
session_start();
$status = $_SESSION["maiSTAT"];
$message = $_SESSION["message"];
?>




<p> <?php echo $message;  ?> </p>