<?php
$page="admin";
// load the global-include
require("../secure/phpss/global.php");
// check if the session is valid
authwrapper();// check if the session is valid


session_start();
//$prevousStepStatus=$_SESSION['step1'];
include('header.php');
include('navigationDiv.php');
$currentPropertyID=$_SESSION['currentPropertyID'];

?> 
		
</div>
      	<div class="span9">
      		<div class="widget stacked">
					
				<div class="widget-header">
					<i class="icon-check"></i>
<h3>Add New Property &rArr;Step 4 of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Property ID &rArr; <?php echo " ".$currentPropertyID; ?> </h3>				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					<div class="tabs-a">
						<ul>
							<li>Description &amp; Location</li>
							<li>Contact</li>
                            							<li>Photos</li>
                                                        <li  class="current">Amenities & Attractions </li>
                            <li>Rates</li>
                            <li >Calendar</li>
						</ul>
						</div>
					
					
					<form action="Step4Execute.php" id="" class="form-horizontal" novalidate method="post">
						<fieldset>
						                               <div class="bedroomModal" style="background-color:#EAEAEA; padding:10px 10px;">
                            <h4>Bedding Info</h4>
                            <label for="amenities"></label>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                <div class="span4 locale-set">
                        <label for="amenitiesField_fv_304" title="king">
                            king
                                
                        </label>
<select id="king" name="king" class="span6">
               <option value="0">0</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
</select>
                </div>
                <div class="span4 locale-set">
                        <label for="amenitiesField_fv_305" title="queen">
                            queen
                              
                        </label>
<select id="queen" name="queen" class="span6">
               <option value="0">0</option>
               <option value="1" >1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
</select>
                </div>
                <div class="span4 locale-set">
                        <label for="amenitiesField_fv_306" title="double">
                            double
                               
                        </label>
<select id="double" name="double" class="span6">
               <option value="0">0</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
</select>
                </div>
                </div>
                <div class="row-fluid">
                <div class="span4 locale-set">
                        <label for="amenitiesField_fv_307" title="twin/ single">
                            twin/ single
                                
                        </label>
<select id="twin" name="twin" class="span6">
               <option value="0">0</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
</select>
                </div>
                <div class="span4 locale-set">
                        <label for="amenitiesField_fv_308" title="child bed">
                            child bed
                              
                        </label>
<select id="child" name="child" class="span6">
               <option value="0">0</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
</select>
                </div>
                <div class="span4 locale-set">
                        <label for="amenitiesField_fv_309" title="baby crib">
                            baby crib
                               
                        </label>
<select id="baby" name="baby" class="span6">
               <option value="0">0</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
</select>
                </div>
                </div>
                <div class="row-fluid">
                <div class="span4 locale-set">
                        <label for="amenitiesField_fv_310" title="sleep sofa /futon">
                            sleep sofa /futon
                        </label>
<select id="sleepSofa" name="sleepSofa" class="span6">
               <option value="0">0</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
</select>
                </div>
                </div>
                <div id="roomNote">
        <div class="control-group">
                            <label class=" control-label" for="unknown">Note</label>
            <div class="controls " id="">
                <div class="countedWrapper ">
			<div class="countedTextElement">
	                    <input id="BeddingNote" name="BeddingNote" class="user-input text-field text-field-en count  input-block-level" data-max-length="1500" rel="60" type="text" value="">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
           
                </div>
            </div>
        </div>
                </div>
            </div>
                            <div id="nearbyPlaces" class="fieldset-wrapper no-border ">
		        <legend class="">
		        Nearby Places &amp; Activities
                </legend>
		<div id="" class="top-spacing  nearest-places">
<!--         <div class="control-group">
                <label for="carRecommendation" class="control-label">Car</label>
            <div class="controls">
                        <label for="carRecommendations1" class="radio inline" title="necessary">
                            <input id="carRecommendations1" name="carRecommendation" type="radio" value="Necessary">
                            Necessary
                        </label>
                        <label for="carRecommendations2" class="radio inline" title="not necessary">
                            <input id="carRecommendations2" name="carRecommendation" type="radio" value="Not Necessary" checked="checked">
                            Not Necessary
                        </label>
                        <label for="carRecommendations3" class="radio inline" title="recommended">
                            <input id="carRecommendations3" name="carRecommendation" type="radio" value="Recommended">
                            Recommended
                        </label>
            </div>
        </div> -->
        <div class="control-group">
                            <label for="nearestAirport" class="control-label">Nearest Airport</label>
            <div class="controls controls-row" id="">
                <div class="countedWrapper span3">
			<div class="countedTextElement">
	                    <input id="nearestAirport" name="nearestAirport" class="user-input text-field text-field-en count  input-block-level" data-max-length="50" rel="50" type="text" value="">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        <input id="nearestAirportdistance" name="nearestAirportdistance" class="user-input text-field span1" type="text" value="" size="4" maxlength="6">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
        <select id="nearestAirportdistanceUnit" name="nearestAirportdistanceUnit" class="span2">
                <option value="MILES" selected="selected">miles</option>
                <option value="KILOMETRES">kilometers</option>
                <option value="METRES">meters</option>
        </select>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
            </div>
        </div>
        <div class="control-group">
                            <label for="nearestBeach" class="control-label">Nearest Beach</label>
            <div class="controls controls-row" id="">
                <div class="countedWrapper span3">
			<div class="countedTextElement">
	                    <input id="nearestBeach" name="nearestBeach" class="user-input text-field text-field-en count  input-block-level" data-max-length="50" rel="50" type="text" value="">
            	<div class="help-inline help-bubble no-help" style="opacity: 0; z-index: 0;">
            		<span class="arrow" style="display: none;"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        <input id="nearestBeachdistance" name="nearestBeachdistance" class="user-input text-field span1" type="text" value="" size="4" maxlength="6">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
        <select id="nearestBeachdistanceUnit" name="nearestBeachdistanceUnit" class="span2">
                <option value="MILES" selected="selected">miles</option>
                <option value="KILOMETRES">kilometers</option>
                <option value="METRES">meters</option>
        </select>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
            </div>
        </div>
        <div class="control-group">
                            <label for="nearestFerry" class="control-label">Nearest Ferry</label>
            <div class="controls controls-row" id="">
                <div class="countedWrapper span3">
			<div class="countedTextElement">
	                    <input id="nearestFerry" name="nearestFerry" class="user-input text-field text-field-en count  input-block-level" data-max-length="50" rel="50" type="text" value="">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        <input id="nearestFerrydistance" name="nearestFerrydistance" class="user-input text-field span1" type="text" value="" size="4" maxlength="6">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
        <select id="nearestFerrydistanceUnit" name="nearestFerrydistanceUnit" class="span2">
                <option value="MILES" selected="selected">miles</option>
                <option value="KILOMETRES">kilometers</option>
                <option value="METRES">meters</option>
        </select>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
            </div>
        </div>
        <div class="control-group">
                            <label for="nearestTrain" class="control-label">Nearest Train</label>
            <div class="controls controls-row" id="">
                <div class="countedWrapper span3">
			<div class="countedTextElement">
	                    <input id="nearestTrain" name="nearestTrain" class="user-input text-field text-field-en count  input-block-level" data-max-length="50" rel="50" type="text" value="">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        <input id="nearestTraindistance" name="nearestTraindistance" class="user-input text-field span1" type="text" value="" size="4" maxlength="6">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
        <select id="nearestTraindistanceUnit" name="nearestTraindistanceUnit" class="span2">
                <option value="MILES" selected="selected">miles</option>
                <option value="KILOMETRES">kilometers</option>
                <option value="METRES">meters</option>
        </select>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
            </div>
        </div>
        <div class="control-group">
                            <label for="nearestHighway" class="control-label">Nearest Highway</label>
            <div class="controls controls-row" id="">
                <div class="countedWrapper span3">
			<div class="countedTextElement">
	                    <input id="nearestHighway" name="nearestHighway" class="user-input text-field text-field-en count  input-block-level" data-max-length="50" rel="50" type="text" value="">
            	<div class="help-inline help-bubble no-help" style="opacity: 0; z-index: 0;">
            		<span class="arrow" style="display: none;"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        <input id="nearestHighwaydistance" name="nearestHighwaydistance" class="user-input text-field span1" type="text" value="" size="4" maxlength="6">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
        <select id="nearestHighwaydistanceUnit" name="nearestHighwaydistanceUnit" class="span2">
                <option value="MILES" selected="selected">miles</option>
                <option value="KILOMETRES">kilometers</option>
                <option value="METRES">meters</option>
        </select>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
            </div>
        </div>
        <div class="control-group">
                            <label for="nearestBar" class="control-label">Nearest Bar</label>
            <div class="controls controls-row" id="">
                <div class="countedWrapper span3">
			<div class="countedTextElement">
	                    <input id="nearestBar" name="nearestBar" class="user-input text-field text-field-en count  input-block-level" data-max-length="50" rel="50" type="text" value="">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        <input id="nearestBardistance" name="nearestBardistance" class="user-input text-field span1" type="text" value="" size="4" maxlength="6">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
        <select id="nearestBardistanceUnit" name="nearestBardistanceUnit" class="span2">
                <option value="MILES" selected="selected">miles</option>
                <option value="KILOMETRES">kilometers</option>
                <option value="METRES">meters</option>
        </select>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
            </div>
        </div>
        <div class="control-group">
                            <label for="nearestSki" class="control-label">Nearest Ski</label>
            <div class="controls controls-row" id="">
                <div class="countedWrapper span3">
			<div class="countedTextElement">
	                    <input id="nearestSki" name="nearestSki" class="user-input text-field text-field-en count  input-block-level" data-max-length="50" rel="50" type="text" value="">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        <input id="nearestSkidistance" name="nearestSkidistance" class="user-input text-field span1" type="text" value="" size="4" maxlength="6">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
        <select id="nearestSkidistanceUnit" name="nearestSkidistanceUnit" class="span2">
                <option value="MILES" selected="selected">miles</option>
                <option value="KILOMETRES">kilometers</option>
                <option value="METRES">meters</option>
        </select>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
            </div>
        </div>
        <div class="control-group">
                            <label for="nearestGolf" class="control-label">Nearest Golf</label>
            <div class="controls controls-row" id="">
                <div class="countedWrapper span3">
			<div class="countedTextElement">
	                    <input id="nearestGolf" name="nearestGolf" class="user-input text-field text-field-en count  input-block-level" data-max-length="50" rel="50" type="text" value="">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        <input id="nearestGolfdistance" name="nearestGolfdistance" class="user-input text-field span1" type="text" value="" size="4" maxlength="6">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
        <select id="nearestGolfdistanceUnit" name="nearestGolfdistanceUnit" class="span2">
                <option value="MILES" selected="selected">miles</option>
                <option value="KILOMETRES">kilometers</option>
                <option value="METRES">meters</option>
        </select>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
            </div>
        </div>
        <div class="control-group">
                            <label for="nearestRestaurant" class="control-label">Nearest Restaurant</label>
            <div class="controls controls-row" id="">
          
                <div class="countedWrapper span3">
			<div class="countedTextElement">
	                    <input id="nearestRestaurant" name="nearestRestaurant" class="user-input text-field text-field-en count  input-block-level" data-max-length="50" rel="50" type="text" value="">
            	<div class="help-inline help-bubble no-help" style="opacity: 0; z-index: 0;">
            		<span class="arrow" style="display: none;"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        <input id="nearestRestaurantdistance" name="nearestRestaurantdistance" class="user-input text-field span1" type="text" value="" size="4" maxlength="6">
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
        <select id="nearestRestaurantdistanceUnit" name="nearestRestaurantdistanceUnit" class="span2">
                <option value="MILES" selected="selected">miles</option>
                <option value="KILOMETRES">kilometers</option>
                <option value="METRES">meters</option>
        </select>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
            </div>
        </div>
		</div>
	    </div><div id="suitability" class="fieldset-wrapper no-border">
		        <legend class="">
		        Suitability
                </legend>
		<div id="suitableFor-fieldgroup" class="top-spacing  checkbox-textarea select-textarea-feature">
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="suitabilityFeaturesField_fv_119" title="Based on your home's location and furnishings, let travelers know whether it's suitable for small children. Describe any specific accommodations.">
                        Children
                                
                    </label>
            <select id="suitabilitychild" name="suitabilitychild" class="user-input text-field ">
                    <option id="ao"  value="Ask Owner">ask owner</option>
                        <option id="cw"  value="Children Welcome">children welcome</option>
                        <option id="ntfc"  value="Not Suitable for Children">not suitable for children</option>
            </select>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="suitabilitychildText" name="suitabilitychildText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="1000" rel="1000" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
            
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="suitabilityFeaturesField_fv_845" title="Specify your smoking policy and any rules to which travelers must adhere.">
                        Smoking
                               
                    </label>
            <select id="suitabilitySmoking" name="suitabilitySmoking" class="user-input text-field ">
                    <option id="ao"  value="Ask Owner">ask owner</option>
                        <option id="nso"  value="Non Smoking Only" selected="selected">non smoking only</option>
                        <option id="sa" value="Smoking Allowed">smoking allowed</option>
            </select>
          
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="suitabilitySmokingText" name="suitabilitySmokingText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="1000" rel="1000" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
            
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="suitabilityFeaturesField_fv_121" title="Let travelers know whether your home is suitable for guests with mobility needs. Be sure to check your local and state laws regarding handicap accessibility.">
                        Wheelchairs
                               
                    </label>
            <select id="suitabilityWheelChair" name="suitabilityWheelChair" class="user-input text-field ">
                    <option id="ao"  value="Ask Owner">ask owner</option>
                        <option id="wa"  value="Wheelchair Accessible">wheelchair accessible</option>
                        <option id="wi"  value="Wheelchair Inaccessible" selected="selected">wheelchair inaccessible</option>
            </select>
          
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="suitabilityWheelChairText" name="suitabilityWheelChairText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="1000" rel="1000" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help" style="opacity: 0; z-index: 0;">
            		<span class="arrow" style="display: none;"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
            
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
         
                    <label for="suitabilityFeaturesField_fv_122" title="Indicate whether pets are allowed at your vacation rental, and explain any pet guidelines you enforce. For example, some owners allow small pets, but guests must first get authorization.">
                        Pets
                               
                    </label>
            <select id="suitabilityPets" name="suitabilityPets" class="user-input text-field ">
                    <option id="ao" value="Ask Owner">ask owner</option>
                        <option id="pc"  value="Pets Considered">pets considered</option>
                        <option id="pna"  value="Pets Not Allowed" selected="selected">pets not allowed</option>
            </select>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="suitabilityPetsText" name="suitabilityPetsText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="1000" rel="1000" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
            
                </div>
        </div>
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
         
                    <label for="rentalTermFeaturesField_fv_635" class="checkbox" title="Use this space to specify any minimum age requirements for renters set by your community or homeowners association.">
                        <input id="minimumAge" name="minimumAge" type="checkbox" value="Minimum Age Limit for Renters">
                        Minimum Age Limit for Renters
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="minimumAgeText" name="minimumAgeText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="rentalTermFeaturesField_fv_636" class="checkbox" title="Check this box if your vacation rental is located in an active adult or retirement community. ">
                        <input id="seniorAdultsCommunity" name="seniorAdultsCommunity" type="checkbox" value="Senior Adults Only Community">
                        Senior Adults Only Community
                               
                    </label>
          
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="seniorAdultsCommunityText" name="seniorAdultsCommunityText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
          
                    <label for="rentalTermFeaturesField_fv_155" class="checkbox" title="Long-term Renters Welcome">
                        <input id="longTermRenters" name="longTermRenters" type="checkbox" value="Long Term Renters Welcome" >
                        Long-term Renters Welcome
                    </label>
        </div>
        <div class="textarea-toggle span5 offset1">
           
                    <label for="rentalTermFeaturesField_fv_520" class="checkbox" title="Events Allowed">
                        <input id="eventsAllowed" name="eventsAllowed" type="checkbox" value="Events Allowed">
                        Events Allowed
                    </label>
        </div>
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
		</div>
	    </div>
        <div id="kitchen" class="fieldset-wrapper no-border">
		        <legend class="">
		        Kitchen &amp; Dining
                </legend>
		<div id="kitchenFeaturesField_fieldgroup" class="top-spacing  checkbox-textarea">
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
           
                    <label for="kitchenFeaturesField_fv_627" class="checkbox" title="A full kitchen contains at least a refrigerator, stovetop, oven and sink. Let guests know whether your kitchen is shared with other units or properties and what appliances are included.">
                        <input id="kitchen" name="kitchen" type="checkbox" value="Kitchen Available"  >
                        Kitchen
                               
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="kitchenText" name="kitchenText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help" style="opacity: 0; z-index: 0;">
            		<span class="arrow" style="display: none;"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
           
                    <label for="kitchenFeaturesField_fv_50" class="checkbox" title="Refrigerator">
                        <input id="Refrigerator" name="Refrigerator" type="checkbox" value="Refrigerator Available" >
                        Refrigerator
                    </label>
          
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="RefrigeratorText" name="RefrigeratorText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="kitchenFeaturesField_fv_52" class="checkbox" title="Stove">
                        <input id="Stove" name="Stove" type="checkbox" value="Stove Available" >
                        Stove
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="StoveText" name="StoveText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help" style="opacity: 0; z-index: 0;">
            		<span class="arrow" style="display: none;"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="kitchenFeaturesField_fv_53" class="checkbox" title="Oven">
                        <input id="Oven" name="Oven" type="checkbox" value="Oven Available">
                        Oven
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="OvenText" name="OvenText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60" ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
           
                    <label for="kitchenFeaturesField_fv_54" class="checkbox" title="Microwave">
                        <input id="Microwave" name="Microwave" type="checkbox" value="Microwave Available" >
                        Microwave
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="MicrowaveText" name="MicrowaveText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help" style="opacity: 0; z-index: 0;">
            		<span class="arrow" style="display: none;"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="kitchenFeaturesField_fv_49" class="checkbox" title="Dishwasher">
                        <input id="Dishwasher" name="Dishwasher" type="checkbox" value="Dishwasher Available" >
                        Dishwasher
                    </label>
          
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="DishwasherText" name="DishwasherText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="kitchenFeaturesField_fv_561" class="checkbox" title="If you provide dishes, utensils or any other kitchenware, let travelers know what you have and how many people it serves.">
                        <input id="Dishes" name="Dishes" type="checkbox" value="Dishes And Utensils Available" >
                        Dishes &amp; Utensils
                                
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="DishesText" name="DishesText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="kitchenFeaturesField_fv_401" class="checkbox" title="Let travelers know if you provide any staple items, including spices, condiments, bottled water or paper goods.">
                        <input id="Pantry" name="Pantry" type="checkbox" value="Pantry Items Available">
                        Pantry Items
                                
                    </label>
          
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="PantryText" name="PantryText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="kitchenFeaturesField_fv_217" class="checkbox" title="Tell travelers about your coffee maker and the supplies you provide, such as a grinder, sugar and creamer. If you have a high-end coffee maker or espresso machine, be sure to include a description.">
                        <input id="CoffeeMaker" name="CoffeeMaker" type="checkbox" value="Coffee Maker Available" >
                        Coffee Maker
                              
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="CoffeeMakerText" name="CoffeeMakerText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="kitchenFeaturesField_fv_218" class="checkbox" title="Toaster">
                        <input id="Toaster" name="Toaster" type="checkbox" value="Toaster Available" >
                        Toaster
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="ToasterText" name="ToasterText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
		</div>
                    <div id="diningAmenities" class="top-spacing">
                        <h4>Dining</h4>
                        <div class="control-group">
                            <div class="row-fluid">
                                <div class="span5">
            <select id="diningField" name="diningField" class="user-input text-field ">
                        <option id="da"  value="Dining Area" selected="selected">Dining Area</option>
                        <option id="dr"  value="Dining Room">Dining Room</option>
            </select>
                                </div>
                                <div class="span5 dining-seats offset1">
                                        <label for="diningSeating-drop-down">Seats</label>
<select id="diningSeats" name="diningSeats" class="span3">
               <option value="0">0</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
               <option value="11">11</option>
               <option value="12">12</option>
               <option value="13">13</option>
               <option value="14">14</option>
               <option value="15">15</option>
               <option value="16">16</option>
               <option value="17">17</option>
               <option value="18">18</option>
               <option value="19">19</option>
               <option value="20">20</option>
               <option value="21">21</option>
               <option value="22">22</option>
               <option value="23">23</option>
               <option value="24">24</option>
               <option value="25">25</option>
               <option value="26">26</option>
               <option value="27">27</option>
               <option value="28">28</option>
               <option value="29">29</option>
               <option value="30">30</option>
               <option value="31">31</option>
               <option value="32">32</option>
               <option value="33">33</option>
               <option value="34">34</option>
               <option value="35">35</option>
               <option value="36">36</option>
               <option value="37">37</option>
               <option value="38">38</option>
               <option value="39">39</option>
               <option value="40">40</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="diningFeaturesField_fv_843" class="checkbox" title="Is there a separate dining room or adjoining dining area? How many people does it seat?">
             <!--           <input id="diningFeaturesField_fv_843" name="displayFeatureMap[DINING_CHECKBOX][0].selected" type="checkbox" value="1" >-->
                        Dining
                                                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="DiningText" name="DiningText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="diningFeaturesField_fv_147" class="checkbox" title="Child's Highchair">
                        <input id="childHighChair" name="childHighChair" type="checkbox" value="Child's Highchair Available">
                        Child's Highchair
                    </label>
        </div>
                </div>
                        </div>
                    </div>
	    </div>
        <div id="amenitiesFeatures" class="fieldset-wrapper no-border">
		        <legend class="">
		        Popular Amenities
                </legend>
		<div id="amenitiesFeaturesField_fieldgroup" class="top-spacing  checkbox-textarea">
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="amenitiesFeaturesField_fv_135" class="checkbox" title="Tell travelers what kind of internet access they'll have at your vacation rental, such as Wi-Fi (wireless internet), high-speed, broadband or dial-up. Do you also provide a computer?  If so, Mac or PC?">
                        <input id="Internet" name="Internet" type="checkbox" value="Internet Available" >
                        Internet
                    </label>
                           <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="InternetText" name="InternetText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="amenitiesFeaturesField_fv_44" class="checkbox" title="Let travelers know if a landline phone is available in your home. If you offer special long distance rates or calling cards, specify here.">
                        <input id="Telephone" name="Telephone" type="checkbox" value="Telephone Available">
                        Telephone
                    </label>
                            <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="TelephoneText" name="TelephoneText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="amenitiesFeaturesField_fv_57" class="checkbox" title="If your home has a fireplace, specify how many, what room and what type: wood or gas, indoor or outdoor.">
                        <input id="Fireplace" name="Fireplace" type="checkbox" value="Fireplace Available">
                        Fireplace
                            
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="FireplaceText" name="FireplaceText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="amenitiesFeaturesField_fv_216" class="checkbox" title="Do you offer a wood-burning stove used for cooking and heating an indoor space? Describe it here.">
                        <input id="WoodStove" name="WoodStove" type="checkbox" value="Wood Stove Available">
                        Wood Stove
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="WoodStoveText" name="WoodStoveText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="amenitiesFeaturesField_fv_45" class="checkbox" title="What kind of system is installed? Central air, split system, or window units.">
                        <input id="AirConditioning" name="AirConditioning" type="checkbox" value="Air Conditioning Available" >
                        Air Conditioning
                             
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="AirConditioningText" name="AirConditioningText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="amenitiesFeaturesField_fv_46" class="checkbox" title="What kind of system is installed?  Central heating, space heaters, etc.">
                        <input id="Heating" name="Heating" type="checkbox" value="Heating Available" >
                        Heating
                              
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="HeatingText" name="HeatingText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="amenitiesFeaturesField_fv_47" class="checkbox" title="Let travelers know what linens are provided or whether they need to bring their own. Linens may include bed sheets, pillows and pillow cases.">
                        <input id="LinensProvided" name="LinensProvided" type="checkbox" value="Linens Available" >
                        Linens Provided
                               
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="LinensProvidedText" name="LinensProvidedText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="amenitiesFeaturesField_fv_136" class="checkbox" title="Let travelers know what towels are provided or whether they need to bring their own.  This includes bath, kitchen and beach towels.">
                        <input id="TowelsProvided" name="TowelsProvided" type="checkbox" value="Towels Provided" >
                        Towels Provided
                               
                    </label>
            
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="TowelsProvidedText" name="TowelsProvidedText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="amenitiesFeaturesField_fv_55" class="checkbox" title="Please indicate if the washer is in your property or shared with others and any supplies provided, such as laundry soap or detergent.">
                        <input id="WashingMachine" name="WashingMachine" type="checkbox" value="Washing Machine Available">
                        Washing Machine
                               
                    </label>
          
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="WashingMachineText" name="WashingMachineText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="amenitiesFeaturesField_fv_56" class="checkbox" title="Please indicate if the dryer is in your property or shared with others.">
                        <input id="ClothesDryer" name="ClothesDryer" type="checkbox" value="Clothes Dryer Available">
                        Clothes Dryer
                             
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="ClothesDryerText" name="ClothesDryerText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="amenitiesFeaturesField_fv_71" class="checkbox" title="Specify whether parking offered is on or off street, secure or covered.  You can also indicate if parking is available for an RV, boat or trailer.">
                        <input id="Parking" name="Parking" type="checkbox" value="Parking Available">
                        Parking
                              
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="ParkingText" name="ParkingText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="amenitiesFeaturesField_fv_72" class="checkbox" title="Is the garage part of the property, detached or a covered car port?">
                        <input id="Garage" name="Garage" type="checkbox" value="Garage Available">
                        Garage
                               
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="GarageText" name="GarageText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="amenitiesFeaturesField_fv_580" class="checkbox" title="Describe the features of your living room. How large is it? How many people does it seat?  What amenities do you provide?">
                        <input id="LivingRoom" name="LivingRoom" type="checkbox" value="Living Room Available" >
                        Living Room
                                
                    </label>
          
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="LivingRoomText" name="LivingRoomText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="amenitiesFeaturesField_fv_139" class="checkbox" title="Do you offer fitness equipment in your home or is it shared with others?  Describe the equipment provided and any rules enforced, such as hours for shared fitness spaces.">
                        <input id="Fitness" name="Fitness" type="checkbox" value="Fitness Room / Equipment Available">
                        Fitness Room / Equipment
                               
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="FitnessText" name="FitnessText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="amenitiesFeaturesField_fv_384" class="checkbox" title="Hair Dryer">
                        <input id="HairDryer" name="HairDryer" type="checkbox" value="Hair Dryer Available">
                        Hair Dryer
                    </label>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="amenitiesFeaturesField_fv_247" class="checkbox" title="Iron &amp; Board">
                        <input id="iron" name="iron" type="checkbox" value="Iron & Board Available">
                        Iron &amp; Board
                    </label>
        </div>
                </div>
                
		</div>
	    </div>
        <div id="entertainment" class="fieldset-wrapper no-border">
		        <legend class="">
		        Entertainment
                </legend>
		<div id="entertainmentFeaturesField_fieldgroup" class="top-spacing  checkbox-textarea">
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="entertainmentFeaturesField_fv_59" class="checkbox" title="Describe the special features of your television(s). Do you have HDTV? Is it connected to a DVD player?">
                        <input id="Television" name="Television" type="checkbox" value="Television Available" >
                        Television
                               
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="TelevisionText" name="TelevisionText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="entertainmentFeaturesField_fv_60" class="checkbox" title="Describe the television channels available at your home. Do you have cable or satellite? Movie or sports channels?">
                        <input id="Satellite" name="Satellite" type="checkbox" value="Satellite / Cable Available" >
                        Satellite / Cable
                               
                    </label>
          
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="SatelliteText" name="SatelliteText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="entertainmentFeaturesField_fv_209" class="checkbox" title="What kind of DVD player do you provide? Does it play HD movies or Blu-ray, for example?">
                        <input id="DVDPlayer" name="DVDPlayer" type="checkbox" value="DVD Player Available">
                        DVD Player
                               
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="DVDPlayerText" name="DVDPlayerText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="entertainmentFeaturesField_fv_374" class="checkbox" title="Let guests know whether you have DVD's available for viewing. List some titles and genres that are available, such as kid-friendly.">
                        <input id="VideoLibrary" name="VideoLibrary" type="checkbox" value="Video Library Available">
                        Video Library
                               
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="VideoLibraryText" name="VideoLibraryText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="entertainmentFeaturesField_fv_376" class="checkbox" title="What kind of video game console do you provide? What games are available?">
                        <input id="VideoGames" name="VideoGames" type="checkbox" value="Video Games Available">
                        Video Games
                                
                                   
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="VideoGamesText" name="VideoGamesText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="entertainmentFeaturesField_fv_63" class="checkbox" title="Do you provide an iPod docking station, CD player or radio? Do you have speakers connected outdoors?">
                        <input id="Stereo" name="Stereo" type="checkbox" value="Stereo Available">
                        Stereo
                                
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="StereoText" name="StereoText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
       <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="entertainmentFeaturesField_fv_376" class="checkbox" title="What kind of video game console do you provide? What games are available?">
                        <input id="MusicLibrary" name="MusicLibrary" type="checkbox" value="Music Library Available">
                        Music Library
                                
                                   
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="MusicLibraryText" name="MusicLibraryText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="entertainmentFeaturesField_fv_63" class="checkbox" title="Do you provide an iPod docking station, CD player or radio? Do you have speakers connected outdoors?">
                        <input id="Games" name="Games" type="checkbox" value="Games Available">
                        Games
                                
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="GamesText" name="GamesText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="entertainmentFeaturesField_fv_362" class="checkbox" title="Do you have children's books or books for all ages?  What titles, genres?">
                        <input id="Books" name="Books" type="checkbox" value="Books Available">
                        Books
                               
                    </label>
            
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="BooksText" name="BooksText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="entertainmentFeaturesField_fv_373" class="checkbox" title="Do you provide toys for families with children, indicate what type of toys and for what ages they are appropriate.">
                        <input id="Toys" name="Toys" type="checkbox" value="Toys Available">
                        Toys
                                
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="ToysText" name="ToysText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="entertainmentFeaturesField_fv_366" class="checkbox" title="If your home has a game room, describe the amenities offered.">
                        <input id="GameRoom" name="GameRoom" type="checkbox" value="Game Room Available">
                        Game Room
                               
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="GameRoomText" name="GameRoomText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="entertainmentFeaturesField_fv_372" class="checkbox" title="Describe your pool table and equipment. Is it meant for pocket billiards, bumper pool or snooker?">
                        <input id="PoolTable" name="PoolTable" type="checkbox" value="Pool Table Available">
                        Pool Table
                                
                    </label>
          
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="PoolTableText" name="PoolTableText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="entertainmentFeaturesField_fv_371" class="checkbox" title="Ping Pong Table">
                        <input id="pingPong" name="pingPong" type="checkbox" value="Ping Pong Table Available">
                        Ping Pong Table
                    </label>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="entertainmentFeaturesField_fv_365" class="checkbox" title="Foosball">
                        <input id="foosball" name="foosball" type="checkbox" value="Foosball Available">
                        Foosball
                    </label>
        </div>
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
		</div>
	    </div>
        <div id="poolAndSpa" class="fieldset-wrapper no-border">
		        <legend class="">
		        Pool &amp; Spa Facilities
                </legend>
		<div id="poolAndSpaFeaturesField_fieldgroup" class="top-spacing  checkbox-textarea">
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="poolAndSpaFeaturesField_fv_211" class="checkbox" title="If your community has a shared pool, let guests know how far away it is and how to access it. Is it secured? Are there any special water features for children to enjoy?">
                       <input id="CommunalPool" name="CommunalPool" type="checkbox" value="Communal Pool Available">
                        Communal Pool
                               
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="CommunalPoolText" name="CommunalPoolText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="poolAndSpaFeaturesField_fv_208" class="checkbox" title="A private pool is for the exclusive use of guests staying at your property. Possible features: indoors vs. outdoors, heated, secured. Are there any special water features that you would like to highlight?">
                        <input id="PrivatePool" name="PrivatePool" type="checkbox" value="Private Pool Available">
                        Private Pool
                               
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="PrivatePoolText" name="PrivatePoolText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="poolAndSpaFeaturesField_fv_224" class="checkbox" title="Is your hot tub shared or private? Is it indoors, outdoors, heated or secured?">
                        <input id="HotTub" name="HotTub" type="checkbox" value="Hot Tub Available">
                        Hot Tub
                              
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="HotTubText" name="HotTubText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="poolAndSpaFeaturesField_fv_167" class="checkbox" title="Describe your sauna and whether it is indoors or outdoors. Guests may also want to know what particular style of sauna you own.">
                        <input id="Sauna" name="Sauna" type="checkbox" value="Sauna Available">
                        Sauna
                              
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="SaunaText" name="SaunaText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="poolAndSpaFeaturesField_fv_140" class="checkbox" title="Indoor Pool">
                        <input id="IndoorPool" name="IndoorPool" type="checkbox" value="Indoor Pool Available">
                        Indoor Pool
                    </label>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="poolAndSpaFeaturesField_fv_207" class="checkbox" title="Heated Pool">
                        <input id="OutdoorPool" name="OutdoorPool" type="checkbox" value="Outdoor Pool Available">
                        Outdoor Pool
                    </label>
        </div>
                </div>
                      <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="poolAndSpaFeaturesField_fv_140" class="checkbox" title="Indoor Pool">
                        <input id="HeatedPool" name="HeatedPool" type="checkbox" value="Indoor Pool Available">
                        Heated Pool
                    </label>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="poolAndSpaFeaturesField_fv_207" class="checkbox" title="Heated Pool">
                        <input id="OutdoorPool123" name="OutdoorPool123" type="hidden" value="Outdoor Pool Available">
                        
                    </label>
        </div>
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
		</div>
	    </div>
        <div id="outsideFeatures" class="fieldset-wrapper no-border">
		        <legend class="">
		        Outdoor Features
                </legend>
		<div id="outdoorFeaturesField_fieldgroup" class="top-spacing  checkbox-textarea">
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="outdoorFeaturesField_fv_246" class="checkbox" title="Describe the features of your barbecue grill. Does it use charcoal, propane or natural gas for cooking?">
                        <input id="OutdoorGrill" name="OutdoorGrill" type="checkbox" value="Outdoor Grill Available">
                        Outdoor Grill
                               
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="OutdoorGrillText" name="OutdoorGrillText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="outdoorFeaturesField_fv_653" class="checkbox" title="A deck or patio is most often an UNCOVERED outdoor space or terrace for dining or recreation that is connected to your property.  Describe its size, features and view.">
                        <input id="Deck" name="Deck" type="checkbox" value="Deck / Patio Available">
                        Deck / Patio
                              
                    </label>
           
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="DeckText" name="DeckText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="outdoorFeaturesField_fv_655" class="checkbox" title="A lanai or gazebo is a COVERED, open-sided structure can be used for entertaining or as a shady resting place.">
                        <input id="Lanai" name="Lanai" type="checkbox" value=" Lanai / Gazebo Available">
                        Lanai / Gazebo
                               
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="LanaiText" name="LanaiText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="outdoorFeaturesField_fv_68" class="checkbox" title="A balcony is most commonly an elevated platform connected to the building, surrounded by a railing. Make sure to describe the view.">
                        <input id="Balcony" name="Balcony" type="checkbox" value="Balcony Available">
                        Balcony
                             
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="BalconyText" name="BalconyText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="outdoorFeaturesField_fv_66" class="checkbox" title="Describe the size of your lawn or garden. Is it large enough for entertaining large groups or events?">
                        <input id="Lawn" name="Lawn" type="checkbox" value="Lawn / Garden Available">
                        Lawn / Garden
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="LawnText" name="LawnText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="outdoorFeaturesField_fv_244" class="checkbox" title="Do you provide bicycles for your guests? If so, what kind and how many? Do you also provide helmets?">
                        <input id="Bicycles" name="Bicycles" type="checkbox" value="Bicycles Available">
                        Bicycles
                               
                    </label>
<select id="BicyclesQ" name="BicyclesQ">
				<option value="0">0</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
               <option value="11">11</option>
               <option value="12">12</option>
               <option value="13">13</option>
               <option value="14">14</option>
               <option value="15">15</option>
               <option value="16">16</option>
               <option value="17">17</option>
               <option value="18">18</option>
               <option value="19">19</option>
               <option value="20">20</option>
               <option value="21">21</option>
               <option value="22">22</option>
               <option value="23">23</option>
               <option value="24">24</option>
               <option value="25">25</option>
               <option value="26">26</option>
               <option value="27">27</option>
               <option value="28">28</option>
               <option value="29">29</option>
               <option value="30">30</option>
               <option value="31">31</option>
               <option value="32">32</option>
               <option value="33">33</option>
               <option value="34">34</option>
               <option value="35">35</option>
               <option value="36">36</option>
               <option value="37">37</option>
               <option value="38">38</option>
               <option value="39">39</option>
               <option value="40">40</option>
</select>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="BicyclesText" name="BicyclesText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="outdoorFeaturesField_fv_846" class="checkbox" title="Do your guests have access to a tennis court? Is it private or shared, lighted or covered? Do you provide racquets for your guests? ">
                        <input id="Tennis" name="Tennis" type="checkbox" value="Tennis Available">
                        Tennis
                                
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="TennisText" name="TennisText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="outdoorFeaturesField_fv_847" class="checkbox" title="Describe your golfing accommodations. Is there a golf cart guests can use? Do you provide golf clubs?">
                        <input id="Golf" name="Golf" type="checkbox" value="Golf Available">
                        Golf
                              
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="GolfText" name="GolfText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="outdoorFeaturesField_fv_245" class="checkbox" title="Do your guests have access to a boat? What kind is is it? Powerboat or sailboat? Are lifejackets included?">
                        <input id="Boat" name="Boat" type="checkbox" value="Boat Available">
                        Boat
                               
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="BoatText" name="BoatText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="outdoorFeaturesField_fv_228" class="checkbox" title="Do you provide kayaks or canoes?  Are paddles or life jackets included?">
                        <input id="Kayak" name="Kayak" type="checkbox" value="Kayak / Canoe Available">
                        Kayak / Canoe
                                
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="KayakText" name="KayakText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
        <div class="textarea-toggle span5 ">
                    <label for="outdoorFeaturesField_fv_705" class="checkbox" title="Describe all the water sports equipment you provide such as surfboards, wakeboards, water skis, boogie boards, jet skis, water toys, etc.">
                        <input id="WaterSG" name="WaterSG" type="checkbox" value="Water Sports Gear Available">
                        Water Sports Gear
                               
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="WaterSGText" name="WaterSGText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
        <div class="textarea-toggle span5 offset1">
                    <label for="outdoorFeaturesField_fv_842" class="checkbox" title="Do your guests have access to ski facilities? Ski-in or ski-out? Do you provide any equipment?">
                        <input id="Ski" name="Ski" type="checkbox" value="Ski & Snowboard available">
                        Ski &amp; Snowboard
                                
                    </label>
                <div class="countedWrapper ">
			<div class="countedTextElement">
                        <textarea id="SkiText" name="SkiText" class="user-input text-area-en count  input-block-level" placeholder="Add more details here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
            	<div class="help-inline help-bubble no-help">
            		<span class="arrow"></span>
            		<p><strong></strong></p>
            		<p>
                    </p>
            	</div>
           	</div>
             
                </div>
        </div>
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
                </div>
		</div>
	    </div>
                      <div id="accommodations" class="fieldset-wrapper no-border">
		        <legend class="">
		        Accommodations
                </legend>
		<div id="accommodationType" class="top-spacing ">
        <div class="control-group">
                <label for="accommodationType" class="control-label">Accommodation Type</label>
            <div class="controls">
                    <div>
                        This property operates as a:
                    </div>
                    <label for="accommodationTypeFeaturesFieldDefault" class="radio inline" title="Vacation Rental">
                        <input id="accommodationType" name="accommodationType" class="not-available accommodationTypeFeaturesFieldDefault" type="radio" value="Vacation Rental" checked="checked">
                        Vacation Rental
                    </label>
                        <label for="accommodationTypeFeaturesField2" class="radio inline" title="Bed &amp; Breakfast">
                            <input id="accommodationType" name="accommodationType" type="radio" value="Bed &amp; Breakfast">
                            Bed &amp; Breakfast
                        </label>
                        <label for="accommodationTypeFeaturesField4" class="radio inline" title="Hotel">
                            <input id="accommodationType" name="accommodationType" type="radio" value="Hotel">
                            Hotel
                        </label>
            </div>
        </div>
                    <div class="control-group">
                        <label for="meals" class="control-label">Meals</label>
                        <div class="controls">
            <select id="mealsDropdownField" name="mealsDropdownField" class="user-input text-field span5">
                        <option id="mealsDropdownField1"  value="Guests provide their own meals" selected="selected">Guests provide their own meals</option>
                        <option id="mealsDropdownField2"  value="Catering available">Catering available</option>
            </select>
                        </div>
                    </div>
                
                   <div class="control-group">
                <label for="breakfast" class="control-label">Break Fast</label>
            <div class="controls">
                    <label for="Breakfast" class="radio inline" title="Not Available">
                        <input id="Breakfast" name="Breakfast" class="not-available houseCleaningFeaturesFieldDefault" type="radio" value="Not Available" checked="checked">
                        Not Available
                    </label>
                        <label for="Breakfast" class="radio inline" title="Housekeeper Included">
                            <input id="Breakfast" name="Breakfast" type="radio" value="Booking Possible">
                            Booking Possible
                        </label>
                        <label for="Breakfast" class="radio inline" title="Housekeeper Optional">
                            <input id="Breakfast" name="Breakfast" type="radio" value="Included In Price">
                           Included In Price
                        </label>
            </div>
        </div>
                <div class="clearfix"></div>
                    <div class="control-group">
                <label for="breakfast" class="control-label">Lunch</label>
            <div class="controls">
                    <label for="Lunch" class="radio inline" title="Not Available">
                        <input id="Lunch" name="Lunch" class="not-available houseCleaningFeaturesFieldDefault" type="radio" value="Not Available" checked="checked">
                        Not Available
                    </label>
                        <label for="Lunch" class="radio inline" title="Booking Possible">
                            <input id="Lunch" name="Lunch" type="radio" value="Booking Possible">
                            Booking Possible
                        </label>
                        <label for="Breakfast" class="radio inline" title="Included In Price">
                            <input id="Lunch" name="Lunch" type="radio" value="Included In Price">
                           Included In Price
                        </label>
            </div>
        </div>
  <div class="control-group">
                <label for="breakfast" class="control-label">Dinner</label>
            <div class="controls">
                    <label for="Dinner" class="radio inline" title="Dinner Not Available">
                        <input id="Dinner" name="Dinner" class="not-available houseCleaningFeaturesFieldDefault" type="radio" value="Not Available" checked="checked">
                        Not Available
                    </label>
                        <label for="Dinner" class="radio inline" title="Dinner Booking Possible">
                            <input id="Dinner" name="Dinner" type="radio" value="Booking Possible">
                            Booking Possible
                        </label>
                        <label for="Dinner" class="radio inline" title="Dinner Included In Price">
                            <input id="Dinner" name="Dinner" type="radio" value="Included In Price">
                           Included In Price
                        </label>
            </div>
        </div>                <div class="clearfix"></div>
                <div class="clearfix"></div>
        <div class="control-group">
                <label for="houseCleaning" class="control-label">Housekeeping</label>
            <div class="controls">
                    <label for="houseCleaningFeaturesFieldDefault" class="radio inline" title="Ask Owner">
                        <input id="houseCleaningFeaturesFieldDefault" name="HouseKeeper" class="not-available houseCleaningFeaturesFieldDefault" type="radio" value="Ask Owner" checked="checked">
                        Ask Owner
                    </label>
                        <label for="houseCleaningFeaturesField1" class="radio inline" title="Housekeeper Included">
                            <input id="houseCleaningFeaturesField1" name="HouseKeeper" type="radio" value="Housekeeper Included">
                            Housekeeper Included
                        </label>
                        <label for="houseCleaningFeaturesField2" class="radio inline" title="Housekeeper Optional">
                            <input id="houseCleaningFeaturesField2" name="HouseKeeper" type="radio" value="HouseKeeper Optional">
                            Housekeeper Optional
                        </label>
            </div>
        </div>
                <div class="clearfix"></div>
		<div id="otherServicesFeaturesField_fieldgroup" class="top-spacing  checkbox-group">
    <h4>Other Services</h4>
                <div class="row-fluid">
        <div class="checkbox-group span3 ">
                    <label for="otherServicesFeaturesField_fv_151" class="checkbox" title="Car Available">
                        <input id="CarAvailable" name="CarAvailable" type="checkbox" value="Car Available">
                        Car Available
                    </label>
        </div>
        <div class="checkbox-group span3 ">
                    <label for="Chauffeur" class="checkbox" title="Chauffeur">
                        <input id="Chauffeur" name="Chauffeur" type="checkbox" value="Chauffeur Available">
                        Chauffeur
                    </label>
        </div>
        <div class="checkbox-group span3 ">
                    <label for="Concierge" class="checkbox" title="Concierge">
                        <input id="Concierge" name="Concierge" type="checkbox" value="Concierge Available">
                        Concierge
                    </label>
        </div>
        <div class="checkbox-group span3 ">
                    <label for="Massage" class="checkbox" title="Massage">
                        <input id="Massage" name="Massage" type="checkbox" value="Massage Available">
                        Massage
                    </label>
        </div>
                </div>
                <div class="row-fluid">
        <div class="checkbox-group span3 ">
                    <label for="PrivateChef" class="checkbox" title="Private Chef">
                        <input id="PrivateChef" name="PrivateChef" type="checkbox" value="Private Chef Available">
                        Private Chef
                    </label>
        </div>
        <div class="checkbox-group span3 ">
                    <label for="Staff" class="checkbox" title="Staff">
                        <input id="Staff" name="Staff" type="checkbox" value="Staff Available">
                        Staff
                    </label>
        </div>
                </div>
		</div>
	    </div>  
        <div id="themes" class="fieldset-wrapper no-border">
		        <legend class="">
		        Themes
                </legend>
		<div id="themeFeaturesField_fieldgroup" class="top-spacing  checkbox-group">
                <div class="row-fluid">
        <div class="checkbox-group span3 ">
                    <label for="Adventure" class="checkbox" title="Adventure">
                        <input id="Adventure" name="Adventure" type="checkbox" value="Adventure">
                        Adventure
                    </label>
        </div>
        <div class="checkbox-group span3 ">
                    <label for="away" class="checkbox" title="Away From It All">
                        <input id="away" name="away" type="checkbox" value="Away From It All">
                        Away From It All
                    </label>
        </div>
        <div class="checkbox-group span3 ">
                    <label for="Budget" class="checkbox" title="Budget">
                        <input id="Budget" name="Budget" type="checkbox" value="Budget">
                        Budget
                    </label>
        </div>
        <div class="checkbox-group span3 ">
                    <label for="Family" class="checkbox" title="Family">
                        <input id="Family" name="Family" type="checkbox" value="Family">
                        Family
                    </label>
        </div>
                </div>
                <div class="row-fluid">
                </div>
                <div class="row-fluid">
        <div class="checkbox-group span3 ">
                    <label for="Historic" class="checkbox" title="Historic">
                        <input id="Historic" name="Historic" type="checkbox" value="Historic" >
                        Historic
                    </label>
        </div>
        <div class="checkbox-group span3 ">
                    <label for="Romantic" class="checkbox" title="Romantic">
                        <input id="Romantic" name="Romantic" type="checkbox" value="Romantic">
                        Romantic
                    </label>
        </div>
        <div class="checkbox-group span3 ">
                    <label for="Spa" class="checkbox" title="Spa">
                        <input id="Spa" name="Spa" type="checkbox" value="Spa">
                        Spa
                    </label>
        </div>
        <div class="checkbox-group span3 ">
                    <label for="Sports" class="checkbox" title="Sports &amp; Activities">
                        <input id="Sports" name="Sports" type="checkbox" value=" Sports & Activities">
                        Sports &amp; Activities
                    </label>
        </div>
                </div>
                <div class="row-fluid">
        <div class="checkbox-group span3 ">
                    <label for="Tourist" class="checkbox" title="Tourist Attractions">
                        <input id="Tourist" name="Tourist" type="checkbox" value="Tourist Attractions" >
                        Tourist Attractions
                    </label>
        </div>
                </div>
		</div>
	    </div>
            <hr>
                            <h4>Additional Info</h4>
                           <div class="control-group">
						      <div class="controls">
						         <textarea id="Additional" name="Additional" class="user-input text-area-en count  input-block-level" placeholder="Add Additional Information  here..." data-max-length="200" rel="200" rows="3" cols="60"  ></textarea>
						      </div>
						    </div>
						    <div class="form-actions">
						      <button type="submit" class="btn btn-danger btn">Save and Go To Next Step</button>&nbsp;&nbsp;
						      <button type="reset" class="btn">Cancel</button>
						    </div>
						  </fieldset>
						</form>
					
				</div> <!-- /widget-content -->
					
			</div> <!-- /widget -->					
			
	    </div> <!-- /span12 -->     	
      	
      	
      </div> <!-- /row -->

    </div> <!-- /container -->
    
</div>
			<footer id="footer">
				<nav>
					<div class="vcard">
						<h3>Contact us <span class="fn org">Asean Tourist</span></h3>
						<ul class="list-a">
							<li><span>Tell</span> <span class="tel">(84) 888 888 888</span></li>
							<li><span>Email</span> <a class="email">contact//travel/com</a></li>
							<li class="adr"><span>Add</span> <span class="street-address">Street</span>, <span class="locality">Hanoi</span> City, <span class="country-name">Vn</span></li>
						</ul>
					</div>
					<div>
						<h3>Support &amp; Help</h3>
						<ul>
							<li><a href="admin/">Payment options</a></li>
							<li><a href="admin/">FAQ</a></li>
							<li><a href="admin/">Privacy &amp; Policy</a></li>
						</ul>
					</div>
					<div>
						<h3>Information</h3>
						<ul>
							<li><a href="admin/">My account</a></li>
							<li><a href="admin/">Sit map</a></li>
							<li><a href="admin/">Order history</a></li>
						</ul>
					</div>
					<form action="./" method="post">
						<fieldset>
							<legend>Newsletter</legend>
							<p>Lorem emphasised est dolor sit ams...</p>
							<p>
								<label for="na">Enter your email</label>
								<input type="email" id="na" name="na" required>
								<button type="submit">Submit</button>
							</p>
						</fieldset>
					</form>
				</nav>
				<p>Copyright &copy; <span class="date">2013</span>. All rights reseved <a href="admin/">Asean Tourist</a></p>
				<ul id="social">
					<li class="rs"><a rel="external" href="admin/">RSS</a></li>
					<li class="tw"><a rel="external" href="admin/">Twitter</a></li>
					<li class="fl"><a rel="external" href="admin/">Flickr</a></li>
					<li class="fb"><a rel="external" href="admin/">Facebook</a></li>
				</ul>
			</footer>
		</div>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;language=en"></script>
         <script src="javascript/jquery.min.js"></script>
          <script src="javascript/scripts.js"></script>
           <script src="javascript/mobile.js"></script>
           
           
		<script src="admin/js/libs/jquery-ui-1.10.0.custom.min.js"></script>
<script src="admin/js/libs/bootstrap.min.js"></script>

<script src="admin/js/plugins/validate/jquery.validate.js"></script>

<script src="admin/js/Application.js"></script>
<script src="admin/js/demo/validation.js"></script>
	</body>
</html>