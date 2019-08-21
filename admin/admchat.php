<?php
if(isset($_POST["done"]){
$mail = $_POST["mail"];
$time = time();

if(isset($_POST["send"]))
{
$ADmsg = $_POST["msg"];
$bd -> query("INSERT INTO `chat` (`id`, `mail`, `USmsg`, `ADmsg`, `time`) VALUES (NULL, '".$mail."', '', '".$ADmsg."', '".$time."');");

}	

$ALLusMSG = $bd -> query("SELECT `USmsg` FROM `chat` WHERE `mail` = '".$mail."'");
$ALLadMSG = $bd -> query("SELECT `ADmsg` FROM `chat` WHERE `mail` = '".$mail."'");
$ALLids = $bd -> query("SELECT `id` FROM `chat` WHERE `mail` = '".$mail."'");
$ALLtimes = $bd -> query("SELECT `time` FROM `chat` WHERE `mail` = '".$mail."'");
$colUS = $bd -> query("SELECT `USmsg` FROM `chat` WHERE `mail` = '".$mail."'");
$colAD = $bd -> query("SELECT `ADmsg` FROM `chat` WHERE `mail` = '".$mail."'");
$messagesUSER = USmessag($ALLusMSG);
$messagesADMIN = ADmessag($ALLadMSG);
$messagesID = IDmessag($ALLids);
$messagesTIME = TIMEmessag($ALLtimes);
$messagesNUMBad = colvo($colAD);
$messagesNUMBus = colvo1($colUS);
}




function colvo1($result_set){

	while(($row = $result_set->fetch_assoc()) != false){		
	}
		$numb = $result_set->num_rows;
		return $numb;
}

function colvo($result_set){

	while(($row = $result_set->fetch_assoc()) != false){		
	}
		$numb = $result_set->num_rows;
		return $numb;
}


function USmessag($result_set){
$o = 0;
$USmessages = array();
	while(($row = $result_set->fetch_assoc()) != false){

		$infos[$o] = $row["USmsg"];
		$o +=1;		
		
	} return $infos;

}

function ADmessag($result_set){
$o = 0;
$ADmessages = array();
	while(($row = $result_set->fetch_assoc()) != false){

		$infos[$o] = $row["ADmsg"];
		$o +=1;		
		
	} return $infos;

}

function IDmessag($result_set){
$o = 0;
$ids = array();
	while(($row = $result_set->fetch_assoc()) != false){

		$infos[$o] = $row["id"];
		$o +=1;		
		
	} return $infos;

}

function TIMEmessag($result_set){
$o = 0;
$TIMEmessages = array();
	while(($row = $result_set->fetch_assoc()) != false){

		$infos[$o] = $row["time"];
		$o +=1;		
		
	} return $infos;

}
function vivod1($result_set){

	while(($row = $result_set->fetch_assoc()) != false){
		return $row["mail"];
		
	}
}

















?>

<p style="
		position: absolute;
		right: 20%;
		top: 40px;
		z-index: 11;
		" id="php"><?php for($i = 0; $i < $messagesNUMBus; $i++){echo "<br>".'<font color="green">'.$messagesUSER[$i].'</font>'."</br>".'<font color="red">'.$messagesADMIN[$i].'</font>'."</br>";} ?></p>