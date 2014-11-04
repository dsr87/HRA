<?php
require("Connection.php"); 
require("../secure/phpss/global.php");
//require("commonFunctions.php");

session_start();
$currentPropertyID=$_SESSION['currentPropertyID'];
$seasonName=sanitize($_POST['seasonName']);
$starts=sanitize($_POST['starts']);
$ends=sanitize($_POST['ends']);
$minStay=sanitize($_POST['minStay']);
$nightly=sanitize($_POST['nightly']);
$weekly=sanitize($_POST['weekly']);
$monthly=sanitize($_POST['monthly']);



//echo $bathrooms.$elevator.$occupancy.$maidInfo;

		//echo 'user does not exist';
		//Insert User Details Into Database
$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`Step5Rates` (`propertyID`, `seasonName`, `starts`, `ends`, `minStay`, `nightly`, `weekly`, `monthly`) VALUES ('$currentPropertyID', '$seasonName', '$starts', '$ends', '$minStay', '$nightly', '$weekly', '$monthly')");


		if($insert_row){


  							header("Location: step5.php"); // insertion into step 1 successful...present step 2

		}else{
			  							header("Location: step5.php"); // insertion into step 1 failed...re-present step 1

  						  die('Error : ('. $mysqli->errno .') '. $mysqli->error);
			}
		
		

// Free Resources	
		$insert_row->free();
		$mysqli->close();
		//echo 'deepak';

/*

try {
 
    $sql = "INSERT INTO `bipin_test`.`phpss_account` (`id`, `username`, `password`, `fName`, `lName`, `phoneNo`, `active`, `address`, `city`, `pinCode`, `state`, `country`) VALUES (NULL, $email, $password, $firstname, $lastname, $phone, '1', $address, $city, '201301', $state, $country)";
 
    $q = $conn->prepare($sql);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
 
    while ($r = $q->fetch()) {
        echo sprintf('%s <br/>', $r['name']);
    }
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

*/

/*
try {
 
    $sql = 'SELECT * FROM `workers`';
 
    $q = $conn->prepare($sql);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
 
    while ($r = $q->fetch()) {
        echo sprintf('%s <br/>', $r['name']);
    }
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
*/
  ?>
