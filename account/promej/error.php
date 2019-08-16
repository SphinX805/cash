<?php
session_set_cookie_params(21600);
session_start();
$status = $_SESSION["maiSTAT"];
$message = $_SESSION["message"];
$id = $_SESSION["id"];
?>


<p><?php echo $message ?> </p>
<a class="btn" href="../../index.php">link</a>

<div class="message">	
<p><?php echo $message ?></p>
<a class="btn" href="../index.php"><p>link</p></a>
</div>

<style type="text/css">
	body {
		margin: 0;	
		background-color: #0c0c0c;
		background-image: url("https://www.transparenttextures.com/patterns/cubes.png");
		color: #fff;
	}

	.message {
		width: 40%;
		min-height: 80px;
		height: auto;
		margin: 40px 30%;
		border-radius: 	5px;
		background-color: rgba(45,45,45,0.85);
	}

	.message p {
		display: inline-block;
		width: 50%;	
	}

	.btn {
		float: right;		
		width: 80px;
		height: 25px;
		padding: 5px 0 5px 20px;	
		margin: 10px 30px;
		color: #fff;
		background-color: #7C1177;
		text-decoration: none;
		border-radius: 8px;
	}

	.btn p {
		display: inline-block;
		width: 60px;	
		text-align: center;
		padding: 0;	
		margin: 0;
		color: #FFAAFF;	
		font-weight: bold;
		font-size: 	20px;
		border-bottom: 2px solid #7C1177;
	}
		
	.btn:hover p {
		border-bottom: 2px solid #fff;
	}

	p {
		display: inline-block;
		margin: 20px 40px;
	}
</style>

