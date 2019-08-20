<?php

$i = $_POST["btnnum"];
if(isset($_POST["submit".$i.""])){
								require "../bd.php";
	$mAil = $_POST["mail"];
	$Brub = $_POST["rub"];
	$Busd = $_POST["usd"];
	$Bbtc = $_POST["btc"];
	if(($Brub != "")&&($Brub != " ")){
		$bd -> query("UPDATE `users` SET `rub` = '".$Brub."' WHERE `users`.`mail` = '".$mAil."';");
	}

	if(($Busd != "")&&($Busd != " ")){
		$bd -> query("UPDATE `users` SET `usd` = '".$Busd."' WHERE `users`.`mail` = '".$mAil."';");
	}

	if(($Bbtc != "")&&($Bbtc != " ")){
		$bd -> query("UPDATE `users` SET `btc` = '".$Bbtc."' WHERE `users`.`mail` = '".$mAil."';");
	}

//$bd -> query("UPDATE `users` SET `rub` = '".$Brub."', `usd` = '".$Busd."', `btc` = '".$Bbtc."' WHERE `users`.`mail` = '".$mAil."';");
$bd -> close();
header('Location: index.php');
}







?>