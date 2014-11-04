<?php 
require("adminCommon.php");

$currentPropertyID=$_SESSION['currentPropertyID'];
$CurrentUserID=$_SESSION['CurrentUserID'];

?>   
			
</div>

<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup, code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<script type="text/javascript">
if (document.location.protocol == 'file:') {
	alert("The might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
}
</script>
      	<div class="span9">
      		<div class="widget stacked">
					
				<div class="widget-header">
					<i class="icon-check"></i>
					<h3>Add New Property &rArr;Step 1 of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Property ID &rArr; <?php echo " ".$currentPropertyID; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer ID &rArr; <?php echo " ".$CurrentUserID; ?> </h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					<div class="tabs-a">
						<ul>
							<li class="current">Description &amp; Location</li>
							<li>Contact</li>
                            							<li>Photos</li>
                                                        <li>Amenities & Attractions </li>
                            <li>Rates</li>
                            <li >Calendar</li>
						</ul>
						</div>
					<br>
					
					<form action="Step1Execute.php" id="validation-form" class="form-horizontal" novalidate method="post">
						<fieldset>
						    <div class="control-group">
						      <label class="control-label" for="name">Name Of Property</label>
						      <div class="controls">
						        <input type="text" class="input-large" name="name" id="name">
						      </div>
						    </div>
                            <div class="control-group">
				            <label class="control-label" for="validateSelect">Country</label>
				            <div class="controls">
				            <select name="Country" id="Country" >
<option value="" selected="selected">Select One</option>
 <option value="AF">Afghanistan</option><option value="AX">Aland Islands
</option><option value="AL">Albania</option><option value="DZ">Algeria
</option><option value="AS">American Samoa
</option><option value="AD">Andorra</option><option value="AO">Angola
</option><option value="AI">Anguilla</option><option value="AQ">Antarctica
</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina
</option><option value="AM">Armenia
</option><option value="AW">Aruba
</option><option value="AU">Australia
</option><option value="AT">Austria
</option><option value="AZ">Azerbaijan
</option><option value="BS">Bahamas
</option><option value="BH">Bahrain
</option><option value="BD">Bangladesh
</option><option value="BB">Barbados
</option><option value="BY">Belarus
</option><option value="BE">Belgium
</option><option value="BZ">Belize
</option><option value="BJ">Benin
</option><option value="BM">Bermuda
</option><option value="BT">Bhutan
</option><option value="BO">Bolivia
Bolivia, Plurinational state of</option><option value="BA">Bosnia and Herzegovina
</option><option value="BW">Botswana
</option><option value="BV">Bouvet Island
</option><option value="BR">Brazil
</option><option value="IO">British Indian Ocean Territory
</option><option value="BN">Brunei Darussalam
</option><option value="BG">Bulgaria
</option><option value="BF">Burkina Faso
</option><option value="BI">Burundi
</option><option value="KH">Cambodia
</option><option value="CM">Cameroon
</option><option value="CA">Canada
</option><option value="CV">Cape Verde
</option><option value="KY">Cayman Islands
</option><option value="CF">Central African Republic
</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China
</option><option value="CX">Christmas Island
</option><option value="CC">Cocos (Keeling) Islands
</option><option value="CO">Colombia
</option><option value="KM">Comoros
</option><option value="CG">Congo
</option><option value="CD">Congo, The Democratic Republic of the
</option><option value="CK">Cook Islands
</option><option value="CR">Costa Rica
</option><option value="CI">Cote d'Ivoire</option><option value="HR">Croatia
</option><option value="CU">Cuba
</option><option value="CY">Cyprus
</option><option value="CZ">Czech Republic
</option><option value="DK">Denmark
</option><option value="DJ">Djibouti
</option><option value="DM">Dominica
</option><option value="DO">Dominican Republic
</option><option value="EC">Ecuador
</option><option value="EG">Egypt
</option><option value="SV">El Salvador
</option><option value="GQ">Equatorial Guinea
</option><option value="ER">Eritrea
</option><option value="EE">Estonia
</option><option value="ET">Ethiopia
</option><option value="FK">Falkland Islands (Malvinas)
</option><option value="FO">Faroe Islands
</option><option value="FJ">Fiji
</option><option value="FI">Finland
</option><option value="FR">France
</option><option value="GF">French Guiana</option><option value="PF">French Polynesia
</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia
</option><option value="GE">Georgia</option><option value="DE">Germany
</option><option value="GH">Ghana
</option><option value="GI">Gibraltar
</option><option value="GR">Greece
</option><option value="GL">Greenland
</option><option value="GD">Grenada</option><option value="GP">Guadeloupe
</option><option value="GU">Guam
</option><option value="GT">Guatemala
</option><option value="GG">Guernsey</option><option value="GN">Guinea
</option><option value="GW">Guinea-Bissau
</option><option value="GY">Guyana
</option><option value="HT">Haiti
</option><option value="HM">Heard Island and McDonald Islands
</option><option value="VA">Holy See (Vatican City State)
</option><option value="HN">Honduras
</option><option value="HK">Hong Kong
</option><option value="HU">Hungary
</option><option value="IS">Iceland
</option><option  value="IN">India
</option><option value="ID">Indonesia
</option><option value="IR">Iran, Islamic Republic of
</option><option value="IQ">Iraq
</option><option value="IE">Ireland
</option><option value="IM">Isle of Man
</option><option value="IL">Israel
</option><option value="IT">Italy</option><option value="JM">Jamaica
</option><option value="JP">Japan
</option><option value="JE">Jersey
</option><option value="JO">Jordan
</option><option value="KZ">Kazakhstan
</option><option value="KE">Kenya
</option><option value="KI">Kiribati
</option><option value="KP">Korea, Democratic People's Republic of
</option><option value="KR">Korea, Republic of
</option><option value="KW">Kuwait
</option><option value="KG">Kyrgyzstan
</option><option value="LA">Lao People's Democratic Republic
</option><option value="LV">Latvia
</option><option value="LB">Lebanon
</option><option value="LS">Lesotho
</option><option value="LR">Liberia
</option><option value="LY">Libyan Arab Jamahiriya
</option><option value="LI">Liechtenstein
</option><option value="LT">Lithuania
</option><option value="LU">Luxembourg
</option><option value="MO">Macao
</option><option value="MK">Macedonia
</option><option value="MG">Madagascar
</option><option value="MW">Malawi
</option><option value="MY">Malaysia
</option><option value="MV">Maldives
</option><option value="ML">Mali
</option><option value="MT">Malta
</option><option value="MH">Marshall Islands
</option><option value="MQ">Martinique
</option><option value="MR">Mauritania
</option><option value="MU">Mauritius
</option><option value="YT">Mayotte
</option><option value="MX">Mexico
</option><option value="FM">Micronesia, Federated States of
</option><option value="MD">Moldova, Republic of
</option><option value="MC">Monaco
</option><option value="MN">Mongolia
</option><option value="ME">Montenegro
</option><option value="MS">Montserrat
</option><option value="MA">Morocco
</option><option value="MZ">Mozambique
</option><option value="MM">Myanmar
</option><option value="NA">Namibia
</option><option value="NR">Nauru
</option><option value="NP">Nepal
</option><option value="NL">Netherlands
</option><option value="AN">Netherlands Antilles
</option><option value="NC">New Caledonia
</option><option value="NZ">New Zealand
</option><option value="NI">Nicaragua
</option><option value="NE">Niger
</option><option value="NG">Nigeria
</option><option value="NU">Niue
</option><option value="NF">Norfolk Island
</option><option value="MP">Northern Mariana Islands
</option><option value="NO">Norway</option><option value="OM">Oman
</option><option value="PK">Pakistan
</option><option value="PW">Palau
</option><option value="PS">Palestinian Territory, Occupied</option><option value="PA">Panama
</option><option value="PG">Papua New Guinea
</option><option value="PY">Paraguay
</option><option value="PE">Peru
</option><option value="PH">Philippines
</option><option value="PN">Pitcairn
</option><option value="PL">Poland
</option><option value="PT">Portugal
</option><option value="PR">Puerto Rico
</option><option value="QA">Qatar
</option><option value="RE">Reunion</option><option value="RO">Romania
</option><option value="RU">Russian Federation
</option><option value="RW">Rwanda
</option><option value="SH">Saint Helena
</option><option value="KN">Saint Kitts and Nevis
</option><option value="LC">Saint Lucia
</option><option value="MF">Saint Martin</option><option value="PM">Saint Pierre and Miquelon
</option><option value="VC">Saint Vincent and the Grenadines
</option><option value="WS">Samoa
</option><option value="SM">San Marino
</option><option value="ST">Sao Tome and Principe
</option><option value="SA">Saudi Arabia
</option><option value="SN">Senegal
</option><option value="RS">Serbia
</option><option value="SC">Seychelles
</option><option value="SL">Sierra Leone
</option><option value="SG">Singapore
</option><option value="SK">Slovakia
</option><option value="SI">Slovenia
</option><option value="SB">Solomon Islands
</option><option value="SO">Somalia
</option><option value="ZA">South Africa
</option><option value="GS">South Georgia and the South Sandwich Islands
</option><option value="ES">Spain
</option><option value="LK">Sri Lanka
</option><option value="SD">Sudan
</option><option value="SR">Suriname
</option><option value="SJ">Svalbard and Jan Mayen
</option><option value="SZ">Swaziland
</option><option value="SE">Sweden
</option><option value="CH">Switzerland
</option><option value="SY">Syrian Arab Republic
</option><option value="TW">Taiwan
</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic of
</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga
</option><option value="TT">Trinidad and Tobago
</option><option value="TN">Tunisia
</option><option value="TR">Turkey</option><option value="TM">Turkmenistan
</option><option value="TC">Turks and Caicos Islands
</option><option value="TV">Tuvalu
</option><option value="UG">Uganda
</option><option value="UA">Ukraine
</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States
</option><option value="UM">United States Minor Outlying Islands
</option><option value="UY">Uruguay
</option><option value="UZ">Uzbekistan
</option><option value="VU">Vanuatu
</option><option value="VE">Venezuela, Bolivarian Republic of</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British
</option><option value="VI">Virgin Islands, U.S.
</option><option value="WF">Wallis and Futuna
</option><option value="EH">Western Sahara
</option><option value="YE">Yemen
</option><option value="ZM">Zambia
</option><option value="ZW">Zimbabwe</option></select>
				            </div>
				          </div>
                          <div class="control-group">
				            <label class="control-label" for="validateSelect">State / Province</label>
				            <div class="controls">
				             <select name="State" id="State" >
<option selected="selected" value="">Select State</option></select>
				            </div>
				          </div>
                           <div class="control-group">
				            <label class="control-label" for="validateSelect">City</label>
				            <div class="controls">
				             <select name="City" id="City" >
</select>
				            </div>
				          </div>
						    <div class="control-group">
						      <label class="control-label" for="email">Street Address</label>
						      <div class="controls">
						        <input type="text" class="input-large" name="add" id="add">
						      </div>
						    </div>
						   
						    <div class="control-group">
						      <label class="control-label" for="message">ZIP</label>
						      <div class="controls">
						        <input type="text" class="input-large" name="zip" id="zip">
						      </div>
						    </div>
                            
                          <div class="control-group">
						      <label class="control-label" for="subject">Property Headline</label>
						      <div class="controls">
						        <input type="text" class="input-large" name="headline" id="headline">
						      </div>
						    </div>
                             <div class="control-group">
						      <label class="control-label" for="subject">Property Description</label>
						      <div class="controls">
						        <textarea class="span6" name="pDesc" id="pDesc" rows="30" cols="30" ></textarea>
						      </div>
						    </div>
                            
				          <div class="control-group">
				            <label class="control-label" for="validateSelect">Bedroom(s)</label>
				            <div class="controls">
				              <select id="bedrooms" name="bedrooms">
				                <option value="">Select...
				               <option value="1">1 </option>
				                <option value="2">2 </option>
				                <option value="3">3 </option>
				                <option value="4">4 </option>
				                <option value="5">5 </option>
                                <option value="6">6 </option>
				                <option value="7">7 </option>
				                <option value="8">8 </option>
				                <option value="9">9 </option>
				                <option value="10">10 </option>
                                <option value="11">11 </option>
				                <option value="12">12 </option>
				                <option value="13">13 </option>
				                <option value="14">14 </option>
				                <option value="15">15 </option>
                                <option value="16">16 </option>
				                <option value="17">17 </option>
				                <option value="18">18 </option>
				                <option value="19">19 </option>
				                <option value="20">20 </option></select>
				            </div>
				          </div>
                          <div class="control-group">
				            <label class="control-label" for="validateSelect">Bathroom(s)</label>
				            <div class="controls">
				              <select id="bathrooms" name="bathrooms">					 <option value="">Select...
				                <option value="1">1 </option>
				                <option value="2">2 </option>
				                <option value="3">3 </option>
				                <option value="4">4 </option>
				                <option value="5">5 </option>
                                <option value="6">6 </option>
				                <option value="7">7 </option>
				                <option value="8">8 </option>
				                <option value="9">9 </option>
				                <option value="10">10 </option>
                                <option value="11">11 </option>
				                <option value="12">12 </option>
				                <option value="13">13 </option>
				                <option value="14">14 </option>
				                <option value="15">15 </option>
                                <option value="16">16 </option>
				                <option value="17">17 </option>
				                <option value="18">18 </option>
				                <option value="19">19 </option>
				                <option value="20">20 </option></select>
				            </div>
				          </div>
                          <div class="control-group">
				            <label class="control-label" for="validateSelect">Property Type</label>
				            <div class="controls">
				              <select id="propertyType" name="propertyType">
				                <option value="">Select... </option>
				                <option value="Apartment~16">Apartment Rentals </option>
				                <option value="Boat~2">Boat Rentals </option>
				                <option value="Bunglow~3">Bunglow Rentals </option>
				                <option value="Cabin~4">Cabin Rentals </option>
				                <option value="Chalet~5">Chalet Rentals </option>
                                <option value="Chateau~6">Chateau Rentals</option>
                                <option value="Condo~7">Condo Rentals</option>
                                <option value="Cottage~8">Cottage Rentals</option>
                                <option value="Farmhouse~9">Farmhouse Rentals</option>
                                <option value="Guesthouse~10">Guesthouse Rentals</option>
                                <option value="House~23">House Rentals</option>
                                 <option value="Hotel~18">Hotel Rentals</option>
                                <option value="Lodge~12">Lodge Rentals</option>Studio 
                                <option value="Studio~17">Studio Rentals</option>
                                <option value="TimeShare~13">TimeShare Rentals</option>
                                <option value="Townhouse~14">Townhouse Rentals</option>
                                <option value="Villa~15">Villa Rentals</option>
                               </select>
				            </div>
				          </div>
				           <div class="control-group">
				            <label class="control-label" for="validateSelect">Property View</label>
				            <div class="controls">
				              <select id="propertyView" name="propertyView">
				                <option value="">Select... </option>
				                <option value="Bay~13">Bay View </option>
				                <option value="BeachFront~2">BeachFront View </option>
				                <option value="Beach~15">Beach View</option>
				                <option value="City~3">City View </option>
				                <option value="Forest~4">Forest View </option>
				                <option value="Garden~5">Garden View </option>
                                <option value="Golf~6">Golf View</option>
                                <option value="Lake~7">Lake View</option>
                                <option value="Mountain~8">Mountain View</option>
                                <option value="Ocean~9">Ocean View</option>
                                <option value="Pool~10">Pool View</option>
                                <option value="River~11">River View</option>
                                 
                               
                               </select>
				            </div>
				          </div>
						    <div class="control-group">
				            <label class="control-label">On Which Floor</label>
				            <div class="controls">
				             <input type="text" class="input-large" name="floor" id="floor">
				            </div>
				          </div>
                            <div class="control-group">
				            <label class="control-label">Elevator</label>
				            <div class="controls">
				              <label class="checkbox">
				                <input type="checkbox" name="elevator" value="1">
				              </label>
				            </div>
				          </div>
                            <div class="control-group">
				            <label class="control-label">Sleeps</label>
				            <div class="controls">
				              <select id="sleeps" name="sleeps">
				                <option value="">Select... </option>
				                <option value="1">1 </option>
				                <option value="2">2 </option>
				                <option value="3">3 </option>
				                <option value="4">4 </option>
				                <option value="5">5 </option>
                                <option value="6">6 </option>
				                <option value="7">7 </option>
				                <option value="8">8 </option>
				                <option value="9">9 </option>
				                <option value="10">10 </option>
                                <option value="11">11 </option>
				                <option value="12">12 </option>
				                <option value="13">13 </option>
				                <option value="14">14 </option>
				                <option value="15">15 </option>
                                <option value="16">16 </option>
				                <option value="17">17 </option>
				                <option value="18">18 </option>
				                <option value="19">19 </option>
				                <option value="20">20 </option>
			                  </select>
				            </div>
				          </div>
                    <!--      <div class="control-group">
				            <label class="control-label">Maximum Occupancy</label>
				            <div class="controls">
				              <label class="control-label">
				               <select id="occupancy" name="occupancy">
				                <option value="">Select... </option>
				                <option value="1">1 </option>
				                <option value="2">2 </option>
				                <option value="3">3 </option>
				                <option value="4">4 </option>
				                <option value="5">5 </option>
                                <option value="6">6 </option>
				                <option value="7">7 </option>
				                <option value="8">8 </option>
				                <option value="9">9 </option>
				                <option value="10">10 </option>
                                <option value="11">11 </option>
				                <option value="12">12 </option>
				                <option value="13">13 </option>
				                <option value="14">14 </option>
				                <option value="15">15 </option>
                                <option value="16">16 </option>
				                <option value="17">17 </option>
				                <option value="18">18 </option>
				                <option value="19">19 </option>
				                <option value="20">20 </option>
			                  </select>
				              </label>
				            </div>
				          </div> --> 
                         
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
                   <script>
	
jQuery(document).ready(function($){
	//alert(1);
	$("#Country").change(function(){
		$("select[name='State']").html('');
		$("select[name='City']").html('');
		var code=$(this).val();
		$.ajax({
			type: "POST",
			url: "getregions.php",
			data:{code:code},
			success:function(data){
			
				$("select[name='State']").html(data);
			}
			});
	});

	$("select[name='State']").change(function(){
		var code=$(this).val();
		$.ajax({
			type: "POST",
			url: "getcities.php",
			data:{code:code},
			success:function(data){
				$("select[name='City']").html(data);
			}
			});
	});
})

</script>

          <script src="javascript/scripts.js"></script>
           <script src="javascript/mobile.js"></script>
           
		<script src="admin/js/libs/jquery-ui-1.10.0.custom.min.js"></script>
<script src="admin/js/libs/bootstrap.min.js"></script>

<script src="admin/js/plugins/validate/jquery.validate.js"></script>

<script src="admin/js/Application.js"></script>
<script src="admin/js/demo/validation.js"></script>
	</body>
</html>