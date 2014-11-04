<?php
$page="admin";
// load the global-include
require("../secure/phpss/global.php");
// check if the session is valid
//authwrapper();// check if the session is valid


session_start();
//$prevousStepStatus=$_SESSION['step1'];
include('header.php');
include('navigationDiv.php');
$currentPropertyID=$_SESSION['currentPropertyID'];

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
<h3>Add New Property &rArr;Step 5 of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Property ID &rArr; <?php echo " ".$currentPropertyID; ?> </h3>				</div> <!-- /widget-header -->
				
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
					<br>
					
					<form action="Step5Execute.php" method="post" id="validation-form" class="form-horizontal" novalidate>
                    <div class="row rate">
                    	<div class="span2"> <input type="text" placeholder="Season Name" class="span2" name="seasonName" ></div>
                        <div class="span1"> <input type="text" placeholder="Starts" class="small date hasDatepicker" name="starts" ></div>
                        <div class="span1"> <input type="text" placeholder="Ends" class="small date hasDatepicker" name="ends" ></div>
                        <div class="span1"><select class="season" name="minStay" id="season">
                        <option value="">Minimum Stay </option>
                        <option value="1-Night">1 Night </option>
                        <option value="2-Night">2 Night </option>
                        <option value="3-Night">3 Night </option>
                        <option value="4-Night">4 Night </option>
                        <option value="5-Night">5 Night </option>
                        <option value="6-Night">6 Night </option>
                        <option value="">---------- </option>
                        <option value="1-Week">1 Week </option>
                         <option value="2-Week">2 Week </option>
                          <option value="3-Week">3 Week </option>
                        <option value="">---------- </option>
                        <option value="1-Month">1 Month</option>
                        <option value="2-Month">2 Month</option>
                        <option value="3-Month">3 Month</option>
                        <option value="4-Month">4 Month</option>
                        <option value="5-Month">5 Month</option>
                        <option value="6-Month">6 Month</option>
                        <option value="7-Month">7 Month</option>
                        <option value="8-Month">8 Month</option>
                        <option value="9-Month">9 Month</option>
                        <option value="10-Month">10 Month</option>
                        <option value="11-Month">11 Month</option>
                        <option value="12-Month">12 Month</option>
                        
                        
                        </select>
                        </div>
                        
                        
                        <div class="span1"><input type="text" placeholder="Nightly" class="small season" name="nightly" ></div>
                        <div class="span1"><input type="text" placeholder="Weekly" class="small season" name="weekly" ></div>
                        <div class="span1"><input type="text" placeholder="Monthly" class="monthly" name="monthly" ></div>
                        <br/>
                        <div class="span8 text-right"> <button type="submit" class="btn btn-danger btn">Save</button>&nbsp;&nbsp;
</div>
                        
                    </div>
                    </form>
                    <table class="table table-bordered table-striped table-highlight">
						        <thead>
						          <tr>
						            <th>Season name</th>
						            <th>Starts</th>
						            <th>Ends</th>
                                    <th>Min Stay</th>
						            <th>Weekday</th>
                                    <th>Weekly</th>
                                    <th>Monthly</th>
                                    <th>Delete</th>
						          </tr>
						        </thead>
						        <tbody>
                                <?php 
								require("Connection.php"); 

								try {
 
    $sql = "SELECT *  FROM `Step5Rates` WHERE `propertyID` = '$currentPropertyID'";
 
    $q = $conn->prepare($sql);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
 
    while ($r = $q->fetch()) {
		
		?>
          <tr>
						            <td><?php echo $r['seasonName'] ?></td>
						            <td><?php echo $r['starts'] ?></td>
                                    <td><?php echo $r['ends'] ?></td>
						             <td><?php echo $r['minStay'] ?></td>
						             <td><?php echo $r['nightly'] ?></td>
                                    <td><?php echo $r['weekly'] ?></td>
                                     <td><?php echo $r['monthly'] ?></td>
                                     <td>Delete</td>
						          </tr>
        
		<?php
//        echo sprintf('%s <br/>', $r['seasonName']);
    }
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
								
								?>
						         
						         
						        </tbody>
						      </table>
                        <form action="Step5Part2Execute.php" method="post" id="validation-form" class="form-horizontal" novalidate>

                              <fieldset>
                              <h4>Fees and Taxes </h4>
                               <div class="row rate">
                    	<div class="span2">
                         <input type="text" placeholder="Pet Fee" class="span2"  name="pet" id="pet" > </div>
                        <div class="span2"> <input type="text" placeholder="Cleaning Fee" class="span2"  name="cleaning" id="cleaning" > </div>
                        <div class="span2"> <input type="text" placeholder="Taxes" class="span2" name="tax" id="tax" >
                        </div></div>
                        </fieldset>
                        <fieldset>
                                                <h4>Damage Protection  </h4>
                         <div class="row rate">

                        <div class="span2">
                         <input type="text" placeholder="Damage Protection" class="span2"  name="damage" id="damage" >
                         </div></div>
                        </fieldset>
                        <fieldset>
                                                <h4>Payment Terms </h4>
                         <div class="row rate">
                        <div class="span8"> 
                        <textarea class="span8" rows="30" name="payment" id="payment"></textarea>
                        </div></div>
                          <div class="form-actions" align="center">
						      <button type="submit" class="btn btn-danger btn">Save And Finish Listing</button>&nbsp;&nbsp;
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

	</body>
</html>