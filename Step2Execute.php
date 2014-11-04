<?php
require("Connection.php"); 
require("../secure/phpss/global.php");
//require("commonFunctions.php");

session_start();
$CurrentUserID=$_SESSION['CurrentUserID'];
$arr=explode('~',$_POST['State']);
//$code=$arr[0];
//$region=$code."~".$arr[2];
$regionID=$arr[0];
$regionName=$arr[1];
$arrCity=explode('~',$_POST['City']);
$cityID=$arrCity[0];
$CityName=$arrCity[1];
//echo ' '.$_POST['State'].' region ID'.$regionID.$regionName.'city Details '.$cityID.$CityName.'City posted '.$_POST['City']; 
//echo 'region id'.$regionID.' Region Name'.$regionName.' City ID'.$cityID.' City name'.$CityName;
//echo "1 ".$code." region ".$region; 
$currentPropertyID=$_SESSION['currentPropertyID'];
$name=sanitize($_POST['name']);
$streetAddress=sanitize($_POST['add']);
$city=sanitize($_POST['City']);
//$state=sanitize($region);
$country=sanitize($_POST['Country']);
$zipCode=sanitize($_POST['zipCode']);
$email=sanitize($_POST['email']);
$mobileNo=sanitize($_POST['mobileNo']);
$callingHours=sanitize($_POST['callingHours']);
$timeZone=sanitize($_POST['timeZone']);
$alternateEmail=sanitize($_POST['alternateEmail']);


		//echo 'user does not exist';
		//Insert User Details Into Database
$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`Step2Contact` (`propertyId`, `name`, `streetAddress`, `city`, `cityName`, `state`, `stateName`, `country`, `zipCode`, `email`, `mobileNo`, `timeZone`, `alternateEmail`) VALUES ('$currentPropertyID', '$name', '$streetAddress', '$cityID', '$CityName', '$regionID', '$regionName', '$country', '$zipCode', '$email', '$mobileNo', '$timeZone', '$alternateEmail')");

	
 $insert_row = $mysqli->query("UPDATE `$databaseName`.`StepSavedStages` SET `savedStage` = '2' WHERE `StepSavedStages`.`propertyId` = '$currentPropertyID'");
	
// Free Resources	
 								//echo '<meta http-equiv="Location" content="http://">';

  							header("Location: step3.php"); // insertion into step 1 successful...present step 2

// Free Resources	
		$SaveStage->free();
		$saveStageDAO->close();
		$insert_row->free();
		$mysqli->close();
		//echo 'deepak';


  ?>
