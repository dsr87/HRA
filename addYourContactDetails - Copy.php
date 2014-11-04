<?php 
include("headerSteps.php");
?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-th"></i> <span>Edit Profile</span></a>
                        </li>
                        <li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-th"></i> <span>Inquiries</span></a>
                        </li>
                        <li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-th"></i> <span>Add Listing</span></a>
                        </li>
                        <li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-th"></i> <span>Reviews</span></a>
                        </li>
                        <li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-th"></i> <span>Payment History</span> </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
<h5 class="row"><span class="col-lg-3">Add New Property ⇒Step 2 of 5</span><span class="col-lg-3">Property ID ⇒ </span> <span class="col-lg-3">Customer ID ⇒ 13 </span></h5>
<div class="clearfix"></div>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                         <div class="col-md-12">
                            <!-- general form elements -->
                                <div class="box box-primary">
                                <br>
                                    <div class="mytabs">
                                        <a href="#" class="active">Description & Location</a>
                                        <a href="#" class="">Contact</a>
                                        <a href="#" class="">Photos</a>
                                        <a href="#" class="">Amenities & Attractions</a>
                                        <a href="#" class="">Rates</a>
                                        <a href="#" class="">Calendar</a>
                                    </div><!-- /.box-header -->
                                    <!-- form start -->
                                    <form role="form" action="Step2Execute.php" method="post">
                                        <div class="box-body col-lg-4">
                                            <div class="form-group">
                                                <label>Property Owner Name </label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Country</label>
                                                 <select name="Country" id="Country" class="form-control" >
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
</option><option value="VE">Venezuela, Bolivarian Republic of</option><option value="VN">VietNam</option><option value="VG">Virgin Islands, British
</option><option value="VI">Virgin Islands, U.S.
</option><option value="WF">Wallis and Futuna
</option><option value="EH">Western Sahara
</option><option value="YE">Yemen
</option><option value="ZM">Zambia
</option><option value="ZW">Zimbabwe</option></select>
                                            </div>
                                           <div class="form-group">
                                                <label>State / Province</label>
                                                <select name="State" id="State" class="form-control">
												<option selected="selected" value="">Select State</option>
												</select>
                                            </div>
                                           <div class="form-group">
                                                <label>City</label>
                                                <select name="City" id="City" class="form-control" >
												</select>
                                            </div>
                                            <div class="form-group">
                                                <label>Street Address</label>
                                                <input type="text" class="form-control" name="add" id="add">
                                            </div>
                                            <div class="form-group">
                                                <label>ZIP</label>
                                                <input type="text" class="form-control" name="zip" id="zip">
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control" name="headline" id="headline">
                                            </div>

                                                <div class="form-group">
                                                <label>Retype Email Address</label>
                                                <input type="email" class="form-control" name="headline" id="headline">
                                            </div>
                                        </div><!-- /.box-body -->
                                        <div class="box-body col-lg-8">
                                                <div class=''>
                                                        <label>Product Description</label>
                                                        <textarea id="pDesc" name="pDesc" rows="10" cols="80">
                                                            
                                                        </textarea>
                                                </div>
                                            <div class="col-lg-12">
                                            <div class="row">
                                                <div class="page-header"></div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Bedroom(s)</label>
                                                          <select id="bedrooms" name="bedrooms" class="form-control">
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
				                <option value="20">20 </option>
				                </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Bathrooms(s)</label>
                                                         <select id="bathrooms" name="bathrooms" class="form-control">	
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
                                                    <div class="form-group">
                                                        <label>Property Type</label>
                                                        <select id="propertyType" name="propertyType" class="form-control">
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
                                                   <div class="col-lg-6">
                                                        <div class="form-group">
                                                    <label>Property View</label>
  <select id="propertyView" name="propertyView" class="form-control">
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
                                                                                              </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>On Which Floor</label>
                                                     <input type="text" class="form-control" name="floor" id="floor">
                                                </div>
                                                <div class="form-group">
                                                    <label >Sleeps</label>
                                                   <select id="sleeps" name="sleeps" class="form-control">
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
                                                </div>
                                                                   
                                            </div>
                                        </div><!-- /.box-body -->
                                        <div class="clearfix"></div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </form>
                                </div><!-- /.box -->
                          

                        </div><!--/.col (left) -->
                    </div><!-- row -->

                </section><!-- /.content -->
                

            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
                <div class="footer">
                    <div class="wrapper">
                        <div class="company">
                            <h1>Company</h1>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">The Team</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="fun">
                            <h1>Fun</h1>
                            <ul>
                                <li><a href="#">2014 Travelers' Favorites</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Blogger Tools</a></li>
                                <li><a href="#">Top Users</a></li>
                                <li><a href="#">Recent Questions</a></li>
                                <li><a href="#">Featured Postcards</a></li>
                            </ul>               
                        </div>
                        <div class="legal">
                            <h1>Legal</h1>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Guidelines</a></li>
                            </ul>               
                        </div>
                        <div class="app right">
                            <p><img src="img/playfoot.png" alt="" class="pull-right"></p>
                            <p><img src="img/appfoot.png" alt="" class="pull-right"></p>
                            <ul class="social-icons">
                                <li><a href="#"><img src="img/fb.png" alt=""></a></li>
                                <li><a href="#"><img src="img/tw.png" alt=""></a></li>
                                <li><a href="#"><img src="img/g.png" alt=""></a></li>
                                <li><a href="#"><img src="img/p.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="copyright">
                            <p><span>Copyright © 2014 Company</span></p><p> <span class="power">Powered By : <a href="http://lovesmok.com">Coderocks</a></span></p>
                        </div>
                    </div>
             </div>

        <!-- add new calendar event modal -->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../js/AdminLTE/demo.js" type="text/javascript"></script>        
        <!-- CK Editor -->
        <script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../../js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="pDesc"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('pDesc');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>
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
        

    </body>
</html>
