<?php
session_set_cookie_params(21600);
session_start();
$status = $_SESSION["maiSTAT"];
$message = $_SESSION["message"];
$id = $_SESSION["id"];
?>


<p><?php echo $message ?> </p>
<a class="btn" href="../../reg.php">link</a>

<style type="text/css">
	.btn {
		text-decoration: none;
		color: #fff;
		background-color: #000;
		border-radius: 8px;
		padding: 5px 10px;
	}

	p {
		display: inline-block;
		margin: 20px 40px;
	}
</style>
