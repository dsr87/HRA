<?php
$conn = new PDO("mysql:host=localhost;dbname=holidaya_hra", holidaya_hra, Redif43gftr);
$databaseName="holidaya_hra";

function sanitize($in) {
 $v1= addslashes(htmlspecialchars(strip_tags(trim($in))));
 $v2= preg_replace('/\s+/', ' ', $v1);
 return mysql_real_escape_string($v2);
}




//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','holidaya_hra','Redif43gftr','holidaya_hra');
$saveStageDAO = new mysqli('localhost','holidaya_hra','Redif43gftr','holidaya_hra');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}




?>