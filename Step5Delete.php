<?php

$page="admin";
// load the global-include
require("../secure/phpss/global.php");// check if the session is valid
require("Connection.php");


authwrapper();

session_start();

$ID2Delete=$_GET['ID'];
$sql = "DELETE FROM `$databaseName`.`Step5Rates` WHERE `Step5Rates`.`id` ='$ID2Delete'";

$q = $conn->prepare($sql);
$q->execute();

header("Location: step1.php"); // insertion into step 1 failed...re-present step 1

?>