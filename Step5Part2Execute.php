<?php
require("Connection.php"); 
require("../secure/phpss/global.php");
//require("commonFunctions.php");

session_start();
$currentPropertyID=$_SESSION['currentPropertyID'];
$petFee=sanitize($_POST['pet']);
$cleaningFee=sanitize($_POST['cleaning']);
$taxes=sanitize($_POST['tax']);
$damage=sanitize($_POST['damage']);

$paymentTerms=$_POST['payment'];
$tempdesc=str_replace("'", "", $paymentTerms);
$paymentTerms=$tempdesc;
		//Insert User Details Into Database
$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`Step5Part2` (`propertyID`, `petFee`, `cleaningFee`, `taxes`,`damage`, `paymentTerms`) VALUES ('$currentPropertyID', '$petFee', '$cleaningFee', '$taxes','$damage', '$paymentTerms')");


		if($insert_row){


  							header("Location: dashboard.php"); // insertion into step 1 successful...present step 2

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
