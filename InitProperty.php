<?php
require("Connection.php"); 
//require("../secure/phpss/global.php");
//require("commonFunctions.php");

session_start();
$currentUser=$_SESSION['CurrentUserName'];
$CurrentUserID="";

try {
 
    $sql = "SELECT * FROM `phpss_account` WHERE  `username` LIKE '$currentUser'";
 
    $q = $conn->prepare($sql);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
 
           $r = $q->fetch();
		   $CurrentUserID=$r['id'];
		   
		  // echo $currentUser.$CurrentUserID;
      //  echo sprintf('%s <br/>', $r['name']);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

	$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`Properties` (`propertyID`, `customerID`, `active`) VALUES (NULL, '$CurrentUserID', '0')");
$mysqli->query($insert_row);


//printf ("New Record has id %d.\n", $mysqli->insert_id);
$currentPropertyID=$mysqli->insert_id;
$_SESSION['currentPropertyID']=$currentPropertyID;
$calDesc="Property ID ".$currentPropertyID;
$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`bookings_items` (`id`, `id_user`, `id_ref_external`, `desc_en`, `desc_es`, `list_order`, `state`) VALUES ('$currentPropertyID', '$currentPropertyID', '', '$calDesc', '$calDesc', '0', '1')");
$mysqli->query($insert_row);
  							header("Location: addPropertyDetails.php"); 

  ?>
