<?php
require("Connection.php"); 
require("../secure/phpss/global.php");

session_start();
$currentPropertyID=$_SESSION['currentPropertyID'];

$sleeps=sanitize($_POST['sleeps']);
$occupancy=sanitize($_POST['occupancy']);
$king=sanitize($_POST['king']);
$queen=sanitize($_POST['queen']);
$double=sanitize($_POST['double']);
$twin=sanitize($_POST['twin']);
$child=sanitize($_POST['child']);
$baby=sanitize($_POST['baby']);
$sleepSofa=sanitize($_POST['sleepSofa']);
$BeddingNote=sanitize($_POST['BeddingNote']);
//$carRecommendation=sanitize($_POST['carRecommendation']);
$nearestAirport=sanitize($_POST['nearestAirport']);
$nearestAirportdistance=sanitize($_POST['nearestAirportdistance']);
$nearestAirportdistanceUnit=sanitize($_POST['nearestAirportdistanceUnit']);
$nearestBeach=sanitize($_POST['nearestBeach']);
$nearestBeachdistance=sanitize($_POST['nearestBeachdistance']);
$nearestBeachdistanceUnit=sanitize($_POST['nearestBeachdistanceUnit']);
$nearestFerry=sanitize($_POST['nearestFerry']);
$nearestFerrydistance=sanitize($_POST['nearestFerrydistance']);
$nearestFerrydistanceUnit=sanitize($_POST['nearestFerrydistanceUnit']);
$nearestTrain=sanitize($_POST['nearestTrain']);
$nearestTraindistance=sanitize($_POST['nearestTraindistance']);
$nearestTraindistanceUnit=sanitize($_POST['nearestTraindistanceUnit']);
$nearestHighway=sanitize($_POST['nearestHighway']);
$nearestHighwaydistance=sanitize($_POST['nearestHighwaydistance']);
$nearestHighwaydistanceUnit=sanitize($_POST['nearestHighwaydistanceUnit']);
$nearestBar=sanitize($_POST['nearestBar']);
$nearestBardistance=sanitize($_POST['nearestBardistance']);
$nearestBardistanceUnit=sanitize($_POST['nearestBardistanceUnit']);
$nearestSki=sanitize($_POST['nearestSki']);
$nearestSkidistance=sanitize($_POST['nearestSkidistance']);
$nearestSkidistanceUnit=sanitize($_POST['nearestSkidistanceUnit']);

$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`Step4Features1` (`propertyId`, `king`, `queen`, `double`, `twin`, `child`, `baby`, `sleepSofa`, `BeddingNote`, `nearestAirport`, `nearestAirportDistance`, `nearestAirportUnit`, `nearestBeach`, `nearestBeachDistance`, `nearestBeachUnit`, `nearestFerry`, `nearestFerryDistance`, `nearestFerryUnit`, `nearestTrain`, `nearestTrainDistance`, `nearestTrainUnit`, `nearestHighway`, `nearestHighwayDistance`, `nearestHighwayUnit`, `nearestBar`, `nearestBarDistance`, `nearestBarUnit`, `nearestSki`, `nearestSkiDistance`, `nearestSkiUnit`) VALUES ('$currentPropertyID', '$king', '$queen', '$double', '$twin', '$child', '$baby', '$sleepSofa', '$BeddingNote', '$nearestAirport', '$nearestAirportdistance', '$nearestAirportdistanceUnit', '$nearestBeach', '$nearestBeachdistance', '$nearestBeachdistanceUnit', '$nearestFerry', '$nearestFerrydistance', '$nearestFerrydistanceUnit', '$nearestTrain', '$nearestTraindistance', '$nearestTraindistanceUnit', '$nearestHighway', '$nearestHighwaydistance', '$nearestHighwaydistanceUnit', '$nearestBar', '$nearestBardistance', '$nearestBardistanceUnit', '$nearestSki', '$nearestSkidistance', '$nearestSkidistanceUnit')");
/* if($insert_row)
{echo "yes";}else echo "no".   printf("Errormessage: %s\n", $mysqli->error);
;
 */
$nearestGolf=sanitize($_POST['nearestGolf']);
$nearestGolfdistance=sanitize($_POST['nearestGolfdistance']);
$nearestGolfdistanceUnit=sanitize($_POST['nearestGolfdistanceUnit']);
$nearestRestaurant=sanitize($_POST['nearestRestaurant']);
$nearestRestaurantdistance=sanitize($_POST['nearestRestaurantdistance']);
$nearestRestaurantdistanceUnit=sanitize($_POST['nearestRestaurantdistanceUnit']);
$suitabilitychild=sanitize($_POST['suitabilitychild']);
$suitabilitychildText=sanitize($_POST['suitabilitychildText']);
$suitabilitySmoking=sanitize($_POST['suitabilitySmoking']);
$suitabilitySmokingText=sanitize($_POST['suitabilitySmokingText']);
$suitabilityWheelChair=sanitize($_POST['suitabilityWheelChair']);
$suitabilityWheelChairText=sanitize($_POST['suitabilityWheelChairText']);
$suitabilityPets=sanitize($_POST['suitabilityPets']);
$suitabilityPetsText=sanitize($_POST['suitabilityPetsText']);
$minimumAge=sanitize($_POST['minimumAge']);
$minimumAgeText=sanitize($_POST['minimumAgeText']);
$seniorAdultsCommunity=sanitize($_POST['seniorAdultsCommunity']);
$seniorAdultsCommunityText=sanitize($_POST['seniorAdultsCommunityText']);
$longTermRenters=sanitize($_POST['longTermRenters']);
$eventsAllowed=sanitize($_POST['eventsAllowed']);

//  Kitchen And Dining
$kitchen=sanitize($_POST['kitchen']);
$kitchenText=sanitize($_POST['kitchenText']);
$Refrigerator=sanitize($_POST['Refrigerator']);
$RefrigeratorText=sanitize($_POST['RefrigeratorText']);
$Stove=sanitize($_POST['Stove']);
$StoveText=sanitize($_POST['StoveText']);
$Oven=sanitize($_POST['Oven']);
$OvenText=sanitize($_POST['OvenText']);
$Microwave=sanitize($_POST['Microwave']);
$MicrowaveText=sanitize($_POST['MicrowaveText']);
$Dishwasher=sanitize($_POST['Dishwasher']);
$DishwasherText=sanitize($_POST['DishwasherText']);
$Dishes=sanitize($_POST['Dishes']);
$DishesText=sanitize($_POST['DishesText']);

if($suitabilitychild=="Ask Owner")
{$childSID=1;}else
	if($suitabilitychild=="Children Welcome")
	{$childSID=2;}else
		if($suitabilitychild=="Not Suitable for Children")
		{$childSID=3;}

	if($suitabilitySmoking=="Ask Owner")
	{$smokingSID=1;}else
		if($suitabilitySmoking=="Non Smoking Only")
		{$smokingSID=2;}else
			if($suitabilitySmoking=="Smoking Allowed")
			{$smokingSID=3;}

			
		if($suitabilityWheelChair=="Ask Owner")
		{$disabledSID=1;}else
			if($suitabilityWheelChair=="Wheelchair Accessible")
			{$disabledSID=2;}else
				if($suitabilityWheelChair=="Wheelchair Inaccessible")
				{$disabledSID=3;}

			if($suitabilityPets=="Ask Owner")
			{$petsSID=1;}else
				if($suitabilityPets=="Pets Considered")
				{$petsSID=2;}else
					if($suitabilityPets=="Pets Not Allowed")
					{$petsSID=3;}
$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`Step4Features2` (`propertyId`, `nearestGolf`, `nearestGolfDistance`, `nearestGolfUnit`, `nearestRestaurant`, `nearestRestaurantDistance`, `nearestRestaurantUnit`, `suitabilitychild`, `suitabilitychildText`, `suitabilitySmoking`, `suitabilitySmokingText`, `suitabilityWheelChair`, `suitabilityWheelChairText`, `suitabilityPets`, `suitabilityPetsText`, `minimumAgeForRenters`, `minimumAgeText`, `SeniorAdultsOnlyCommunity`, `seniorAdultsCommunityText`, `longTermRenters`, `eventsAllowed`, `kitchen`, `kitchenText`, `Refrigerator`, `RefrigeratorText`, `Stove`, `StoveText`, `Oven`, `OvenText`, `Microwave`, `MicrowaveText`, `Dishwasher`, `DishwasherText`, `Dishes`, `DishesText`, `suitabilitychildID`, `suitabilitySmokingID`, `suitabilityWheelChairID`, `suitabilityPetsID`) VALUES ('$currentPropertyID', '$nearestGolf', '$nearestGolfdistance', '$nearestGolfdistanceUnit', '$nearestRestaurant', '$nearestRestaurantdistance', '$nearestRestaurantdistanceUnit', '$suitabilitychild', '$suitabilitychildText', '$suitabilitySmoking', '$suitabilitySmokingText', '$suitabilityWheelChair', '$suitabilityWheelChairText', '$suitabilityPets', '$suitabilityPetsText', '$minimumAge', '$minimumAgeText', '$seniorAdultsCommunity', '$seniorAdultsCommunityText', '$longTermRenters', '$eventsAllowed', '$kitchen', '$kitchenText', '$Refrigerator', '$RefrigeratorText', '$Stove', '$StoveText', '$Oven', '$OvenText', '$Microwave', '$MicrowaveText', '$Dishwasher', '$DishwasherText', '$Dishes', '$DishesText', '$childSID', '$smokingSID', '$disabledSID', '$petsSID')");





$Pantry=sanitize($_POST['Pantry']);
$PantryText=sanitize($_POST['PantryText']);
$CoffeeMaker=sanitize($_POST['CoffeeMaker']);
$CoffeeMakerText=sanitize($_POST['CoffeeMakerText']);
$Toaster=sanitize($_POST['Toaster']);
$ToasterText=sanitize($_POST['ToasterText']);
$diningField=sanitize($_POST['diningField']);
$diningSeats=sanitize($_POST['diningSeats']);
$DiningText=sanitize($_POST['DiningText']);
$childHighChair=sanitize($_POST['childHighChair']);
$Internet=sanitize($_POST['Internet']);
$InternetText=sanitize($_POST['InternetText']);
$Telephone=sanitize($_POST['Telephone']);
$TelephoneText=sanitize($_POST['TelephoneText']);
$Fireplace=sanitize($_POST['Fireplace']);
$FireplaceText=sanitize($_POST['FireplaceText']);
$WoodStove=sanitize($_POST['WoodStove']);
$WoodStoveText=sanitize($_POST['WoodStoveText']);
$AirConditioning=sanitize($_POST['AirConditioning']);
$AirConditioningText=sanitize($_POST['AirConditioningText']);
$Heating=sanitize($_POST['Heating']);
$HeatingText=sanitize($_POST['HeatingText']);
$LinensProvided=sanitize($_POST['LinensProvided']);
$LinensProvidedText=sanitize($_POST['LinensProvidedText']);
$TowelsProvided=sanitize($_POST['TowelsProvided']);
$TowelsProvidedText=sanitize($_POST['TowelsProvidedText']);
$WashingMachine=sanitize($_POST['WashingMachine']);
$WashingMachineText=sanitize($_POST['WashingMachineText']);
$ClothesDryer=sanitize($_POST['ClothesDryer']);
$ClothesDryerText=sanitize($_POST['ClothesDryerText']);
$Parking=sanitize($_POST['Parking']);
$ParkingText=sanitize($_POST['ParkingText']);


$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`Step4Features3` (`propertyId`, `Pantry`, `PantryText`, `CoffeeMaker`, `CoffeeMakerText`, `Toaster`, `ToasterText`, `diningField`, `diningSeats`, `DiningText`, `childHighChair`, `Internet`, `InternetText`, `Telephone`, `TelephoneText`, `Fireplace`, `FireplaceText`, `WoodStove`, `WoodStoveText`, `AirConditioning`, `AirConditioningText`, `Heating`, `HeatingText`, `LinensProvided`, `LinensProvidedText`, `TowelsProvided`, `TowelsProvidedText`, `WashingMachine`, `WashingMachineText`, `ClothesDryer`, `ClothesDryerText`, `Parking`, `ParkingText`) VALUES ('$currentPropertyID', '$Pantry', '$PantryText', '$CoffeeMaker', '$CoffeeMakerText', '$Toaster', '$ToasterText', '$diningField', '$diningSeats', '$DiningText', '$childHighChair', '$Internet', '$InternetText', '$Telephone', '$TelephoneText', '$Fireplace', '$FireplaceText', '$WoodStove', '$WoodStoveText', '$AirConditioning', '$AirConditioningText', '$Heating', '$HeatingText', '$LinensProvided', '$LinensProvidedText', '$TowelsProvided', '$TowelsProvidedText', '$WashingMachine', '$WashingMachineText', '$ClothesDryer', '$ClothesDryerText', '$Parking', '$ParkingText')");




$Garage=sanitize($_POST['Garage']);
$GarageText=sanitize($_POST['GarageText']);
$LivingRoom=sanitize($_POST['LivingRoom']);
$LivingRoomText=sanitize($_POST['LivingRoomText']);
$Fitness=sanitize($_POST['Fitness']);
$FitnessText=sanitize($_POST['FitnessText']);
$HairDryer=sanitize($_POST['HairDryer']);
$iron=sanitize($_POST['iron']);
///////////////// Entertainment
$Television=sanitize($_POST['Television']);
$TelevisionText=sanitize($_POST['TelevisionText']);
$Satellite=sanitize($_POST['Satellite']);
$SatelliteText=sanitize($_POST['SatelliteText']);
$DVDPlayer=sanitize($_POST['DVDPlayer']);
$DVDPlayerText=sanitize($_POST['DVDPlayerText']);
$VideoLibrary=sanitize($_POST['VideoLibrary']);
$VideoLibraryText=sanitize($_POST['VideoLibraryText']);
$VideoGames=sanitize($_POST['VideoGames']);
$VideoGamesText=sanitize($_POST['VideoGamesText']);
$Stereo=sanitize($_POST['Stereo']);
$StereoText=sanitize($_POST['StereoText']);
$MusicLibrary=sanitize($_POST['MusicLibrary']);
$MusicLibraryText=sanitize($_POST['MusicLibraryText']);
$Games=sanitize($_POST['Games']);
$GamesText=sanitize($_POST['GamesText']);
$Books=sanitize($_POST['Books']);
$BooksText=sanitize($_POST['BooksText']);
$Toys=sanitize($_POST['Toys']);
$ToysText=sanitize($_POST['ToysText']);
$GameRoom=sanitize($_POST['GameRoom']);
$GameRoomText=sanitize($_POST['GameRoomText']);


$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`Step4Features4` (`propertyId`, `Garage`, `GarageText`, `LivingRoom`, `LivingRoomText`, `Fitness`, `FitnessText`, `HairDryer`, `iron`, `Television`, `TelevisionText`, `Satellite`, `SatelliteText`, `DVDPlayer`, `DVDPlayerText`, `VideoLibrary`, `VideoLibraryText`, `VideoGames`, `VideoGamesText`, `Stereo`, `StereoText`, `MusicLibrary`, `MusicLibraryText`, `Games`, `GamesText`, `Books`, `BooksText`, `Toys`, `ToysText`, `GameRoom`, `GameRoomText`) VALUES ('$currentPropertyID', '$Garage', '$GarageText', '$LivingRoom', '$LivingRoomText', '$Fitness', '$FitnessText', '$HairDryer', '$iron', '$Television', '$TelevisionText', '$Satellite', '$SatelliteText', '$DVDPlayer', '$DVDPlayerText', '$VideoLibrary', '$VideoLibraryText', '$VideoGames', '$VideoGamesText', '$Stereo', '$StereoText', '$MusicLibrary', '$MusicLibraryText', '$Games', '$GamesText', '$Books', '$BooksText', '$Toys', '$ToysText', '$GameRoom', '$GameRoomText')");



$PoolTable=sanitize($_POST['PoolTable']);
$PoolTableText=sanitize($_POST['PoolTableText']);
$pingPong=sanitize($_POST['pingPong']);
$foosball=sanitize($_POST['foosball']);
//////////////////// Pool &amp; Spa Facilities
$CommunalPool=sanitize($_POST['CommunalPool']);
$CommunalPoolText=sanitize($_POST['CommunalPoolText']);
$PrivatePool=sanitize($_POST['PrivatePool']);
$PrivatePoolText=sanitize($_POST['PrivatePoolText']);
$HotTub=sanitize($_POST['HotTub']);
$HotTubText=sanitize($_POST['HotTubText']);
$Sauna=sanitize($_POST['Sauna']);
$SaunaText=sanitize($_POST['SaunaText']);
$IndoorPool=sanitize($_POST['IndoorPool']);
$HeatedPool=sanitize($_POST['HeatedPool']);
$OutdoorPool=sanitize($_POST['OutdoorPool']);
$OutdoorGrill=sanitize($_POST['OutdoorGrill']);
$OutdoorGrillText=sanitize($_POST['OutdoorGrillText']);
$Deck=sanitize($_POST['Deck']);
$DeckText=sanitize($_POST['DeckText']);
$Lanai=sanitize($_POST['Lanai']);
$LanaiText=sanitize($_POST['LanaiText']);
$Balcony=sanitize($_POST['Balcony']);
$BalconyText=sanitize($_POST['BalconyText']);
$Lawn=sanitize($_POST['Lawn']);
$LawnText=sanitize($_POST['LawnText']);



$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`Step4Features5` (`propertyId`, `PoolTable`, `PoolTableText`, `pingPong`, `foosball`, `CommunalPool`, `CommunalPoolText`, `PrivatePool`, `PrivatePoolText`, `HotTub`, `HotTubText`, `Sauna`, `SaunaText`, `IndoorPool`,`OutdoorPool`, `HeatedPool`, `OutdoorGrill`, `OutdoorGrillText`, `Deck`, `DeckText`, `Lanai`, `LanaiText`, `Balcony`, `BalconyText`, `Lawn`, `LawnText`) VALUES ('$currentPropertyID', '$PoolTable', '$PoolTableText', '$pingPong', '$foosball', '$CommunalPool', '$CommunalPoolText', '$PrivatePool', '$PrivatePoolText', '$HotTub', '$HotTubText', '$Sauna', '$SaunaText', '$IndoorPool','$OutdoorPool', '$HeatedPool', '$OutdoorGrill', '$OutdoorGrillText', '$Deck', '$DeckText', '$Lanai', '$LanaiText', '$Balcony', '$BalconyText', '$Lawn', '$LawnText')");




$Bicycles=sanitize($_POST['Bicycles']);
$BicyclesQ=sanitize($_POST['BicyclesQ']);
$BicyclesText=sanitize($_POST['BicyclesText']);
$Tennis=sanitize($_POST['Tennis']);
$TennisText=sanitize($_POST['TennisText']);
$Golf=sanitize($_POST['Golf']);
$GolfText=sanitize($_POST['GolfText']);
$Boat=sanitize($_POST['Boat']);
$BoatText=sanitize($_POST['BoatText']);
$Kayak=sanitize($_POST['Kayak']);
$KayakText=sanitize($_POST['KayakText']);
$WaterSG=sanitize($_POST['WaterSG']);
$WaterSGText=sanitize($_POST['WaterSGText']);
$Ski=sanitize($_POST['Ski']);
$SkiText=sanitize($_POST['SkiText']);



$accommodationType=sanitize($_POST['accommodationType']);
$mealsDropdownField=sanitize($_POST['mealsDropdownField']);
$HouseKeeper=sanitize($_POST['HouseKeeper']);
$Breakfast=sanitize($_POST['Breakfast']);
$Lunch=sanitize($_POST['Lunch']);
$Dinner=sanitize($_POST['Dinner']);

/// Other Services
$CarAvailable=sanitize($_POST['CarAvailable']);
$Chauffeur=sanitize($_POST['Chauffeur']);
$Concierge=sanitize($_POST['Concierge']);
$Massage=sanitize($_POST['Massage']);
$PrivateChef=sanitize($_POST['PrivateChef']);
$Staff=sanitize($_POST['Staff']);

// Themes
$Adventure=sanitize($_POST['Adventure']);
$away=sanitize($_POST['away']);
$Budget=sanitize($_POST['Budget']);
$Family=sanitize($_POST['Family']);
$Historic=sanitize($_POST['Historic']);
$Romantic=sanitize($_POST['Romantic']);
$Spa=sanitize($_POST['Spa']);
$Sports=sanitize($_POST['Sports']);
$Tourist=sanitize($_POST['Tourist']);
$Additional=sanitize($_POST['Additional']);



		//echo 'user does not exist';
		//Insert User Details Into Database
$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`Step4Features6` (`propertyId`, `Bicycles`, `BicyclesQ`, `BicyclesText`, `Tennis`, `TennisText`, `Golf`, `GolfText`, `Boat`, `BoatText`, `Kayak`, `KayakText`, `WaterSG`, `WaterSGText`, `Ski`, `SkiText`, `accommodationType`, `mealsDropdownField`, `HouseKeeper`, `Breakfast`, `Lunch`, `Dinner`, `CarAvailable`, `Chauffeur`, `Concierge`, `Massage`, `PrivateChef`, `Staff`, `Adventure`, `away`, `Budget`, `Family`, `Historic`, `Romantic`, `Spa`, `Sports`, `Tourist`, `Additional`) VALUES ('$currentPropertyID', '$Bicycles', '$BicyclesQ', '$BicyclesText', '$Tennis', '$TennisText', '$Golf', '$GolfText', '$Boat', '$BoatText', '$Kayak', '$KayakText', '$WaterSG', '$WaterSGText', '$Ski', '$SkiText', '$accommodationType', '$mealsDropdownField', '$HouseKeeper', '$Breakfast', '$Lunch', '$Dinner', '$CarAvailable', '$Chauffeur', '$Concierge', '$Massage', '$PrivateChef', '$Staff', '$Adventure', '$away', '$Budget', '$Family', '$Historic', '$Romantic', '$Spa', '$Sports', '$Tourist', '$Additional');");
  							



header("Location: step5.php"); // insertion into step 4 successful...present step 5
 $insert_row = $mysqli->query("UPDATE `$databaseName`.`StepSavedStages` SET `savedStage` = '4' WHERE `StepSavedStages`.`propertyId` = '$currentPropertyID'");
  					
 
  ?>
