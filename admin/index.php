<?php
require "../bd.php";
$ALLrub = $bd -> query("SELECT `rub` FROM `users` WHERE `mailstatus` = 'true'");
$ALLusd = $bd -> query("SELECT `usd` FROM `users` WHERE `mailstatus` = 'true'");
$ALLbtc = $bd -> query("SELECT `btc` FROM `users` WHERE `mailstatus` = 'true'");
$ALLids = $bd -> query("SELECT `id` FROM `users` WHERE `mailstatus` = 'true'");
$ALLmails = $bd -> query("SELECT `mail` FROM `users` WHERE `mailstatus` = 'true'");
$ALLnames = $bd -> query("SELECT `name` FROM `users` WHERE `mailstatus` = 'true'");
$bd -> close();
$COLVO = vivCOL($ALLids);
$RUBS = vivRUB($ALLrub);
$USDS = vivUSD($ALLusd);
$BTC = vivBTC($ALLbtc);
$MAILS = vivMAIL($ALLmails);
$NAMES = vivNAM($ALLnames);



//FUNCTIONS!!!

function vivNAM($result_set){
$o = 0;
$nams = array();
	while(($row = $result_set->fetch_assoc()) != false){

		$nams[$o] = $row["name"];
		$o +=1;		
		
	} return $nams;

}

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
echo "<div class=\"str\">\n<form action=\"balADM.php\" method=\"POST\">\n<input type=\"hidden\" name=\"btnnum\" value=\"".$i."\">\n<input type=\"hidden\" name=\"mail\" value=\"".$MAILS[$i]."\">\n<div class=\"user\" style=\"color: #FF8000;\">".$MAILS[$i]."\n<font style=\"color: #5197FF; float: right;\">".$NAMES[$i]."</font></div>\n<div class=\"balance\"><p>btc: <input type=\"text\" name=\"btc\" placeholder=\"".$BTC[$i]."\"></p>\n<p>usd: <input type=\"text\" name=\"usd\" placeholder=\"".$USDS[$i]."\"></p>\n<p>rub: <input type=\"text\" name=\"rub\" placeholder=\"".$RUBS[$i]."\"></p></div>\n<input name=\"submit".$i."\" type=\"submit\" value=\"Изменить\">\n</form>\n<form action=\"admchat.php\" method=\"POST\">\n<input type=\"hidden\" name=\"mail\" value=\"".$MAILS[$i]."\">\n<input type=\"submit\" name=\"done\" value=\"Открыть чат\">\n</form>\n</div>";

}





?>
	

	<style>
		body {
			margin: 0;
			background-color: #00381f;
			background-image: url("https://www.transparenttextures.com/patterns/padded-light.png");
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