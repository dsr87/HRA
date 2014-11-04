<?php
$conn = new PDO("mysql:host=localhost;dbname=holidaya_hradv", holidaya_hradv, Assisi123);
$databaseName="holidaya_hradv";

function sanitize($in) {
 $v1= addslashes(htmlspecialchars(strip_tags(trim($in))));
 $v2= preg_replace('/\s+/', ' ', $v1);
 return mysql_real_escape_string($v2);
}




//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','holidaya_hradv','Assisi123','holidaya_hradv');
$mysqli1 = new mysqli('localhost','holidaya_hradv','Assisi123','holidaya_hradv');

$saveStageDAO = new mysqli('localhost','holidaya_hradv','Assisi123','holidaya_hradv');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}




?>