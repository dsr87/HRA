<?php
session_start();
require("Connection.php");
require("../secure/phpss/global.php");

$currentUser=$_SESSION['CurrentUserName'];
$CurrentUserID="";


$ccid=$_GET['customerid'];
$orderId=$_GET['order_number'];
$invoiceNo=$_GET['invoice_id'];
$fname=$_GET['first_name'];
$lname=$_GET['last_name'];
$sAddress=$_GET['street_address'];
$city=$_GET['city'];
$zipcode=$_GET['zip'];
$country=$_GET['country'];
$amount=$_GET['total'];




//

if(!isset($_SESSION['CurrentUserIDPackage'])||$_SESSION['CurrentUserIDPackage']==0 ||$_SESSION['CurrentUserIDPackage']=="")
{
	$currentUserName=$_SESSION['CurrentUserName'];//Set  in Login.php
	$sql = "SELECT id FROM `phpss_account` WHERE `username`='$currentUserName'";

	$q = $conn->prepare($sql);
	$q->execute();
	$q->setFetchMode(PDO::FETCH_ASSOC);
	$r = $q->fetch();
	$_SESSION['CurrentUserID']=$r['id'];

}else
{
	$_SESSION['CurrentUserID']=$_SESSION['CurrentUserIDPackage'];//Set  in Login.php

}

$CurrentUserID=$_SESSION['CurrentUserID'];

$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`Properties` (`propertyID`, `customerID`, `active`) VALUES (NULL, '$CurrentUserID', '0')");
$mysqli->query($insert_row);


//printf ("New Record has id %d.\n", $mysqli->insert_id);
$currentPropertyID=$mysqli->insert_id;
$_SESSION['currentPropertyID']=$currentPropertyID;
$calDesc="Property ID ".$currentPropertyID;
$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`bookings_items` (`id`, `id_user`, `id_ref_external`, `desc_en`, `desc_es`, `list_order`, `state`) VALUES ('$currentPropertyID', '$currentPropertyID', '', '$calDesc', '$calDesc', '0', '1')");
$mysqli->query($insert_row);



//







try {
	$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`orders` (`id`, `orderId`, `invoiceNo`, `customerId`, `amount`, `fName`, `lName`, `streetAddress`, `city`, `zipCode`, `country`, `timeStamp`) VALUES (NULL, '$orderId', '$invoiceNo', '$CurrentUserID', '$amount', '$fname', '$lname', '$sAddress', '$city', '$zipcode', '$country', CURRENT_TIMESTAMP)");
} catch (Exception $e) {
echo $e;
}

if($insert_row){
	$_SESSION['CurrentOrderID']=$orderId;
	$_SESSION['CurrentOrderCustomer']=$fname." ".$lname;
	

	
	header("Location: confirmStatus.php"); // payment status updated successfully
	
}else { die('Error : ('. $mysqli->errno .') '. $mysqli->error);}


  						//	header("Location: step1.php"); 

  ?>

