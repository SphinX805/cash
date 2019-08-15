<?php
$bdname = "sito";
$bdpass = "12345";
$bduser = "bduser";
$host = "localhost";
$bd = new mysqli($host, $bduser, $bdpass, $bdname);
$bd -> query("SET NAMES 'utf8'");





?>