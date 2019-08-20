<?php
require "../bd.php";
$ALLrub = $bd -> query("SELECT `rub` FROM `users` WHERE `mailstatus` = 'true'");
$ALLusd = $bd -> query("SELECT `usd` FROM `users` WHERE `mailstatus` = 'true'");
$ALLbtc = $bd -> query("SELECT `btc` FROM `users` WHERE `mailstatus` = 'true'");
$ALLids = $bd -> query("SELECT `id` FROM `users` WHERE `mailstatus` = 'true'");
$ALLmails = $bd -> query("SELECT `mail` FROM `users` WHERE `mailstatus` = 'true'");
$bd -> close();
$COLVO = vivCOL($ALLids);
$RUBS = vivRUB($ALLrub);
$USDS = vivUSD($ALLusd);
$BTC = vivBTC($ALLbtc);
$MAILS = vivMAIL($ALLmails);




//FUNCTIONS!!!



function vivCOL($result_set){

	while(($row = $result_set->fetch_assoc()) != false){		
	}
		$numb = $result_set->num_rows;
		return $numb;
}

function vivRUB($result_set){
$o = 0;
$rups = array();
	while(($row = $result_set->fetch_assoc()) != false){

		$rups[$o] = $row["rub"];
		$o +=1;		
		
	} return $rups;

}

function vivUSD($result_set){
$o = 0;
$uss = array();
	while(($row = $result_set->fetch_assoc()) != false){

		$uss[$o] = $row["usd"];
		$o +=1;		
		
	} return $uss;

}

function vivBTC($result_set){
$o = 0;
$btcss = array();
	while(($row = $result_set->fetch_assoc()) != false){

		$btcss[$o] = $row["btc"];
		$o +=1;		
		
	} return $btcss;

}

function vivMAIL($result_set){
$o = 0;
$mailsss = array();
	while(($row = $result_set->fetch_assoc()) != false){

		$mailsss[$o] = $row["mail"];
		$o +=1;		
		
	} return $mailsss;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin panel</title>
</head>
<body>
<?php 
for($i=0;$i<$COLVO;$i++){
echo "<div class=\"str\">\n<form action=\"\" method=\"POST\">\n<input type=\"hidden\" name=\"mail\" value=\"mail\">\n<div class=\"user\" style=\"color: #FF8000;\">h22341sadf@mail.ru\n<font style=\"color: #5197FF; float: right;\">user453</font></div>\n<div class=\"balance\"><p>btc: <input type=\"text\" placeholder=\"0.00000000\"></p>\n<p>usd: <input type=\"text\" placeholder=\"0.00\"></p>\n<p>rub: <input type=\"text\" placeholder=\"0.00\"></p></div>\n<input name=\"submit\" type=\"submit\" value=\"Изменить\">\n</form>\n<form action=\"admchat.php\" method=\"POST\">\n<input type=\"hidden\" name=\"mail\" value=\"mail\">\n<input type=\"submit\" name=\"done\" value=\"Открыть чат\">\n</form>\n</div>";

}





?>
	<div class="str">
		<!-- mail btc usd rub submit -->
		<form action="" method="POST">
		<input type="hidden" name="mail" value="mail">
		<div class="user" style="color: #FF8000;">h22341sadf@mail.ru
		<font style="color: #5197FF; float: right;">user453</font></div>
		<div class="balance"><p>btc: <input type="text" placeholder="0.00000000"></p>
		<p>usd: <input type="text" placeholder="0.00"></p>
		<p>rub: <input type="text" placeholder="0.00"></p></div>
		
		<input name="submit" type="submit" value="Изменить">
		</form>
		<form action="" method="POST">
			<input type="hidden" name="mail" value="mail">
			<input type="submit" name="done" value="Открыть чат">
		</form>
	</div>

	<style>
		body {
			margin: 0;
			background-color: #00381f;
			background-image: url("https://www.transparenttextures.com/patterns/padded-light.png");\
		}
		.str {
			width: 100%;
			margin-top: 20px;
			display: inline-block;
			height: auto;
		}

		.str div, p, form {
			display: inline-block;
			margin: 0 10px;
		}
		
		.str p {
			padding-left: 5px;
			border-radius: 5px;
			background-color: #c0c0c0;
		}

		.user {
			width: 200px;
		}
	</style>
</body>
</html>