<?php
require("Connection.php"); 
//require("../secure/phpss/global.php");
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

$currentPropertyID=$_SESSION['currentPropertyID'];
$name=sanitize($_POST['name']);
$country=sanitize($_POST['Country']);
$sql = "SELECT name FROM `countries` where code='$country'";
$q = $conn->prepare($sql);
$q->execute();
$q->setFetchMode(PDO::FETCH_ASSOC);
$r = $q->fetch();
$countryName=$r['name'];
$city=sanitize($_POST['City']);
$add=sanitize($_POST['add']);
$state=sanitize($region);
$zip=sanitize($_POST['zip']);
$headline=sanitize($_POST['headline']);
$pDesc=$_POST['pDesc'];
$tempdesc=str_replace("'", "", $pDesc); 
$pDesc=$tempdesc;
$bedrooms=sanitize($_POST['bedrooms']);
$bathrooms=sanitize($_POST['bathrooms']);
$arr=explode('~',$_POST['propertyType']);
$propertyType=$arr[0];
$propertyTypeID=$arr[1];
$arr=explode('~',$_POST['propertyView']);
$propertyView=$arr[0];
$propertyViewID=$arr[1];


//$propertyView=sanitize($_POST['propertyView']);
$floor=sanitize($_POST['floor']);
$elevator=sanitize($_POST['elevator']);
$sleeps=sanitize($_POST['sleeps']);


//echo $bathrooms.$elevator.$occupancy.$maidInfo;

		//echo 'user does not exist';
		//Insert User Details Into Database
$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`Step1Location` (`ID`, `userId`,`name`, `address`, `city`,`cityName`, `state`, `stateName`,`country`, `zipcode`, `propertyHeading`, `propertyDesc`, `bedroom`, `bathroom`, `propertyType`, `floor`, `elevator`, `sleeps`, `propertyView`, `propertyViewID`, `propertyTypeID`, `countryName`) VALUES ('$currentPropertyID', '$CurrentUserID','$name', '$add', '$cityID','$CityName','$regionID', '$regionName', '$country', '$zip', '$headline', '$pDesc', '$bedrooms', '$bathrooms', '$propertyType', '$floor', '$elevator', '$sleeps', '$propertyView', '$propertyViewID', '$propertyTypeID', '$countryName')");


		if($insert_row){
							//echo "came here 1";
							$_SESSION['step1']=true;
							  $SaveStage = $saveStageDAO->query("INSERT INTO `$databaseName`.`StepSavedStages` (`id`, `userId`, `propertyId`, `savedStage`) VALUES (NULL, '$CurrentUserID', '$currentPropertyID', '1')");
							 // var_dump($SaveStage);die;

	
// Free Resources	
		
 								//echo '<meta http-equiv="Location" content="http://">';

  							header("Location: addYourContactDetails.php"); // insertion into step 1 successful...present step 2

				

		}else{ 
							//echo "came here 2";die;
			  							header("Location: step1.php"); // insertion into step 1 failed...re-present step 1

  						  die('Error : ('. $mysqli->errno .') '. $mysqli->error);
			}
		
		

// Free Resources	
		$SaveStage->free();
		$saveStageDAO->close();
		$insert_row->free();
		$mysqli->close();
		echo 'deepak';

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
