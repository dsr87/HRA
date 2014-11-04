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
<h5 class="row"><span class="col-lg-3">Add New Property ⇒Step 1of 5</span><span class="col-lg-3">Property ID ⇒ </span> <span class="col-lg-3">Customer ID ⇒ 13 </span></h5>
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
                                        <a href="#" class="">Description & Location</a>
                                        <a href="#" class="">Contact</a>
                                        <a href="#" class="">Photos</a>
                                        <a href="#" class="active">Amenities & Attractions</a>
                                        <a href="#" class="">Rates</a>
                                        <a href="#" class="">Calendar</a>
                                    </div><!-- /.box-header -->
                                    <!-- form start -->
                                    <form role="form" action="Step4Execute.php" method="post">
                                        <div class="box-body col-lg-12">

                                            <div class="well">
                                                <div class="row">
                                                    <div class="form-group col-md-3">
                                                        <label>King</label>
                                                        <select id="king" name="king" class="form-control">
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
                                                    <div class="form-group col-md-3">
                                                        <label>Queen</label>
                                                       <select id="queen" name="queen" class="form-control">
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
                                                   <div class="form-group col-md-3">
                                                        <label>Double</label>
                                                        <select id="double" name="double" class="form-control">
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
                                                   <div class="form-group col-md-3">
                                                        <label>Twin / Single</label>
                                                        <select id="twin" name="twin" class="form-control">
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
                                                   <div class="form-group col-md-3">
                                                        <label>Child Bed</label>
                                                       <select id="child" name="child" class="form-control">
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
                                                    <div class="form-group col-md-3">
                                                        <label>Baby Crib</label>
                                                        <select id="baby" name="baby" class="form-control">
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
                                                    <div class="form-group col-md-3">
                                                        <label>Sleep Sofa/Futon</label>
                                                       <select id="sleepSofa" name="sleepSofa" class="form-control">
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
                                                    
                                                    <div class="form-group col-md-3">
                                                        <label>Note</label>
                                                        <input type="text" class="form-control" id="BeddingNote" name="BeddingNote">
                                                    </div>

                                                </div>  
                                            </div>

                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title">Nearby Places & Activities</h3>
                                                </div>
                                                <div class="box-body inline-rows">
                                                    <div class="form-inline col-lg-12" >
                                                      <div class="form-group col-lg-12">
                                                        <label class="col-lg-3" >Nearest Airport</label>
                                                        <input type="text" class="form-control" id="nearestAirport" name="nearestAirport">
                                                        <input type="text" class="form-control" id="nearestAirportdistance" name="nearestAirportdistance">
                                                          <select id="nearestAirportdistanceUnit" name="nearestAirportdistanceUnit" class="form-control">
											                <option value="MILES" selected="selected">miles</option>
											                <option value="KILOMETRES">kilometers</option>
											                <option value="METRES">meters</option>
											        </select>
                                                      </div>
                                                    </div>
                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Beach</label>
                                                        <input type="text" class="form-control" id="nearestBeach" name="nearestBeach">
                                                        <input type="text" class="form-control" id="nearestBeachdistance" name="nearestBeachdistance">
                                                           <select id="nearestBeachdistanceUnit" name="nearestBeachdistanceUnit" class="form-control">
											                <option value="MILES" selected="selected">miles</option>
											                <option value="KILOMETRES">kilometers</option>
											                <option value="METRES">meters</option>
											        </select>
                                                      </div>
                                                    </div>
                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Ferry</label>
                                                        <input type="text" class="form-control" id="nearestFerry" name="nearestFerry">
                                                        <input type="text" class="form-control" id="nearestFerrydistance" name="nearestFerrydistance">
                                                         <select id="nearestFerrydistanceUnit" name="nearestFerrydistanceUnit" class="form-control">
											                <option value="MILES" selected="selected">miles</option>
											                <option value="KILOMETRES">kilometers</option>
											                <option value="METRES">meters</option>
											        </select>
				                                           </div>
                                                    </div>

                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Train</label>
                                                        <input type="text" class="form-control" id="nearestTrain" name="nearestTrain">
                                                        <input type="text" class="form-control" id="nearestTraindistance" name="nearestTraindistance">
                                                       <select id="nearestTraindistanceUnit" name="nearestTraindistanceUnit" class="form-control">
										                <option value="MILES" selected="selected">miles</option>
										                <option value="KILOMETRES">kilometers</option>
										                <option value="METRES">meters</option>
										        </select>
                                                      </div>
                                                    </div>

                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Highway</label>
                                                        <input type="text" class="form-control" id="nearestHighway" name="nearestHighway">
                                                        <input type="text" class="form-control" id="nearestHighwaydistance" name="nearestHighwaydistance">
				                                        <select id="nearestHighwaydistanceUnit" name="nearestHighwaydistanceUnit" class="form-control">
											                <option value="MILES" selected="selected">miles</option>
											                <option value="KILOMETRES">kilometers</option>
											                <option value="METRES">meters</option>
											        </select>
                                                      </div>
                                                    </div>

                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Bar</label>
                                                        <input type="text" class="form-control" id="nearestBar" name="nearestBar">
                                                        <input type="text" class="form-control" id="nearestBardistance" name="nearestBardistance">
                                                         <select id="nearestBardistanceUnit" name="nearestBardistanceUnit" class="form-control">
										                <option value="MILES" selected="selected">miles</option>
										                <option value="KILOMETRES">kilometers</option>
										                <option value="METRES">meters</option>
										        </select>
                                                      </div>
                                                    </div>

                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Ski</label>
                                                        <input type="text" class="form-control" id="nearestSki" name="nearestSki">
                                                        <input type="text" class="form-control" id="nearestSkidistance" name="nearestSkidistance">
                                                         <select id="nearestSkidistanceUnit" name="nearestSkidistanceUnit" class="form-control">
												                <option value="MILES" selected="selected">miles</option>
												                <option value="KILOMETRES">kilometers</option>
												                <option value="METRES">meters</option>
												        </select>
                                                      </div>
                                                    </div>


                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Golf</label>
                                                        <input type="text" class="form-control" id="nearestGolf" name="nearestGolf">
                                                        <input type="text" class="form-control" id="nearestGolfdistance" name="nearestGolfdistance">
                                                        <select id="nearestGolfdistanceUnit" name="nearestGolfdistanceUnit" class="form-control">
												                <option value="MILES" selected="selected">miles</option>
												                <option value="KILOMETRES">kilometers</option>
												                <option value="METRES">meters</option>
												        </select>
                                                      </div>
                                                    </div>

                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Restraunt</label>
                                                        <input type="text" class="form-control" id="nearestRestaurant" name="nearestRestaurant">
                                                        <input type="text" class="form-control"  id="nearestRestaurantdistance" name="nearestRestaurantdistance">
                                                         <select id="nearestRestaurantdistanceUnit" name="nearestRestaurantdistanceUnit" class="form-control">
										                <option value="MILES" selected="selected">miles</option>
										                <option value="KILOMETRES">kilometers</option>
										                <option value="METRES">meters</option>
										        </select>
                                                      </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title ">Suitability</h3>
                                                </div>
                                                <div class="box-body suitability">
                                                    <div class="col-lg-4">
                                                        <label>Children</label>
                                                        <select id="suitabilitychild" name="suitabilitychild" class="form-control">
                    <option id="ao"  value="Ask Owner">ask owner</option>
                        <option id="cw"  value="Children Welcome">children welcome</option>
                        <option id="ntfc"  value="Not Suitable for Children">not suitable for children</option>
            </select>
                                                        <textarea class="form-control" id="suitabilitychildText" name="suitabilitychildText"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Smoking  </label>
                                                         <select id="suitabilitySmoking" name="suitabilitySmoking" class="form-control">
                    <option id="ao"  value="Ask Owner">ask owner</option>
                        <option id="nso"  value="Non Smoking Only" selected="selected">non smoking only</option>
                        <option id="sa" value="Smoking Allowed">smoking allowed</option>
            </select>
                                                        <textarea class="form-control" id="suitabilitySmokingText" name="suitabilitySmokingText"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Wheelchairs</label>
                                                         <select id="suitabilityWheelChair" name="suitabilityWheelChair" class="form-control">
                    <option id="ao"  value="Ask Owner">ask owner</option>
                        <option id="wa"  value="Wheelchair Accessible">wheelchair accessible</option>
                        <option id="wi"  value="Wheelchair Inaccessible" selected="selected">wheelchair inaccessible</option>
            </select>
                                                        <textarea class="form-control" id="suitabilityWheelChairText" name="suitabilityWheelChairText"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label>Pets</label>
                                                        <select id="suitabilityPets" name="suitabilityPets" class="form-control">
                    <option id="ao" value="Ask Owner">ask owner</option>
                        <option id="pc"  value="Pets Considered">pets considered</option>
                        <option id="pna"  value="Pets Not Allowed" selected="selected">pets not allowed</option>
            </select>
                                                        <textarea class="form-control" id="suitabilityPetsText" name="suitabilityPetsText"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input id="minimumAge" name="minimumAge" type="checkbox" value="Minimum Age Limit for Renters"><strong>Min Age Limit for Retailers</strong></label>
                                                        <textarea class="form-control" id="minimumAgeText" name="minimumAgeText"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox">   <input id="seniorAdultsCommunity" name="seniorAdultsCommunity" type="checkbox" value="Senior Adults Only Community">
                                                        <strong>Senior Adults Only Community</strong></label>
                                                        <textarea class="form-control" id="seniorAdultsCommunityText" name="seniorAdultsCommunityText"></textarea>
                                                    </div>
                                                 </div>
                                                 <div class="col-lg-12">
                                                    <div class="col-lg-4 form-group ">
                                                        <label class="checkbox"><input id="longTermRenters" name="longTermRenters" type="checkbox" value="Long Term Renters Welcome" ><strong>Long-term Renters Welcome</strong></label>
                                                    </div>

                                                    <div class="col-lg-4 form-group ">
                                                        <label class="checkbox"><input id="eventsAllowed" name="eventsAllowed" type="checkbox" value="Events Allowed"><strong>Events Allowed</strong></label>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>

                                            </div>

                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title ">Kitchen & Dining</h3>
                                                </div>
                                                <div class="box-body suitability">
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Kitchen</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Refrigerator</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Stove</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Oven</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Microwave</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Dishwasher</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Dishes & Utensils</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Pantry Items</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Coffee Maker</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Toaster</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    
                                                 </div>
                                                 <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group col-lg-4 ">
                                                                <label><b>Dining</b></label>
                                                                <select class="form-control">
                                                                    <option>Dinning Area</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-lg-4 ">
                                                                <label><b>Seats</b></label>
                                                                <select class="form-control">
                                                                    <option>0</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-lg-4">
                                                                <label >Child's Highchair</label>
                                                                <input type="checkbox" class="checkbox">
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-12">
                                                            
                                                            <div class="col-lg-4 form-group">
                                                                <label class="checkbox"><input type="checkbox"><strong>Dining</strong></label>
                                                                <textarea class="form-control"></textarea>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                <div class="clearfix"></div>

                                            </div>

                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title ">Popular Amenities</h3>
                                                </div>
                                                <div class="box-body suitability">
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Internet</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Telephone</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Fireplace</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Wood Stove</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Air Conditioning</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Heating</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Linens Provided</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Towels Provided</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Washing Machine</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Clothes Dryer</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Parking</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Garage</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Living Room</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Fitness Room / Equipment</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    
                                                 </div>
                                                 <div class="col-lg-12">
                                                     <div class="col-lg-4">
                                                        <label  class="checkbox"><input type="checkbox"><strong>Hair Dryer</strong></label>
                                                    </div>
                                                     <div class="col-lg-4">
                                                        <label  class="checkbox"><input type="checkbox"><strong>Iron & Board</strong></label>
                                                    </div>
                                                 </div>
                                                <div class="clearfix"></div>
                                            </div>

                                           <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title ">Entertainment</h3>
                                                </div>
                                                <div class="box-body suitability">
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Internet</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Telephone</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Fireplace</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Wood Stove</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Air Conditioning</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Heating</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Linens Provided</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Towels Provided</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Washing Machine</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Clothes Dryer</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Parking</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Garage</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Living Room</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Fitness Room / Equipment</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    
                                                 </div>
                                                  <div class="col-lg-12">
                                                     <div class="col-lg-4">
                                                        <label  class="checkbox"><input type="checkbox"><strong>Hair Dryer</strong></label>
                                                    </div>
                                                     <div class="col-lg-4">
                                                        <label  class="checkbox"><input type="checkbox"><strong>Iron & Board</strong></label>
                                                    </div>
                                                 </div>
                                                <div class="clearfix"></div>
                                            </div> 

                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title ">Pool & Spa Facilities</h3>
                                                </div>
                                                <div class="box-body suitability">
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Communal Pool</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Private Pool</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Hot Tub</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Sauna</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>                                                    
                                                 </div>
                                                    <div class="col-lg-12">
                                                         <div class="form-group col-lg-4">
                                                            <label  class="checkbox"><input type="checkbox">Indoor Pool</label>
                                                        </div>

                                                         <div class="form-group col-lg-4">
                                                            <label  class="checkbox"><input type="checkbox">Heated Pool</label>
                                                        </div>


                                                         <div class="form-group col-lg-4">
                                                            <label  class="checkbox"><input type="checkbox">Indoor Pool</label>
                                                        </div>
                                                    
                                                    </div>
                                                <div class="clearfix"></div>
                                            </div> 

                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title ">Outdoor Features</h3>
                                                </div>
                                                <div class="box-body suitability">
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Outdoor Grill</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Deck / Patio</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Lanai / Gazebo</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Balcony</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>  

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Lawn / Garden</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>  

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Bicycles</strong></label>
                                                        <select class="form-control">
                                                            <option>hello</option>
                                                        </select>
                                                        <textarea class="form-control"></textarea>
                                                    </div>  

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Tennis</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>  

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Golf</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>  

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Boat</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>  

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Kayak / Canoe</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div> 

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Water Sports Gear</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>  

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Ski & Snowboard</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>                                                    
                                                 </div>
                                                <div class="clearfix"></div>
                                            </div> 

                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title ">Accomodation</h3>
                                                </div>
                                                <div class="box-body suitability">
                                                    <div class="col-lg-12">    
                                                        <div class="col-lg-3">
                                                            <div class="col-lg-12">
                                                                <label class="checkbox">Accommodation Type</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Vacation Rental</label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Bed & Breakfast</label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Hotel</label>
                                                            </div>
                                                        </div>
                                                    </div><!-- row -->
                                                    <div class="col-lg-12">    
                                                        <div class="col-lg-3">
                                                            <div class="col-lg-12">
                                                                <label class="checkbox">Meals</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select class="form-control">
                                                                <option>Please Select</option>
                                                            </select>
                                                        </div>
                                                    </div>    
                                                     <div class="col-lg-12">    
                                                        <div class="col-lg-3">
                                                            <div class="col-lg-12">
                                                                <label class="checkbox">Break Fast</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Not Available  </label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Booking Possible</label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Included In Price </label>
                                                            </div>
                                                        </div>
                                                    </div><!-- row -->
                                                     <div class="col-lg-12">    
                                                        <div class="col-lg-3">
                                                            <div class="col-lg-12">
                                                                <label class="checkbox">Lunch</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Not Available  </label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Booking Possible</label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Included In Price </label>
                                                            </div>
                                                        </div>
                                                    </div><!-- row -->
                                                     <div class="col-lg-12">    
                                                        <div class="col-lg-3">
                                                            <div class="col-lg-12">
                                                                <label class="checkbox">Dinner</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Not Available  </label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Booking Possible</label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Included In Price </label>
                                                            </div>
                                                        </div>
                                                    </div><!-- row -->
                                                     <div class="col-lg-12">    
                                                        <div class="col-lg-3">
                                                            <div class="col-lg-12">
                                                                <label class="checkbox">Housekeeping</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 p0">
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Ask Owner  </label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Housekeeper Included</label>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="radio"><input type="radio">Housekeeper Optional</label>
                                                            </div>
                                                        </div>
                                                    </div><!-- row -->
                                                    
                                                    <div class="col-lg-12"> 
                                                        <h4><b>Other Services</b></h4>  
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Car Available</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Concierge</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Chauffeur</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Massage</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Private Chauffeur</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Staff</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                                <div class="clearfix"></div>
                                            </div> 

                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title ">Themes</h3>
                                                </div>
                                                <div class="box-body suitability">

                                                        <div class="col-lg-12">
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Adventure</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Away From It All</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Family</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Historic</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Romantic</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Spa</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Sports & Activities</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Tourist Attractions</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Sports & Activities</label>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="checkbox "><input type="checkbox">Sports & Activities</label>
                                                            </div>
                                                        </div>
                                                 </div>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="box box-info">
                                                <div class="box-header">
                                                    <h3 class="box-title ">Additional Info</h3>
                                                </div>
                                                <div class="box-body suitability">
                                                           <textarea class="form-control"></textarea>
                                                 </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div><!-- /.box-body -->

                                        <div class="clearfix"></div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-danger">Save and Go To Next Step </button>
                                            <button type="button" class="btn btn-default">Clear</button>
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
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>

    </body>
</html>
