<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black fixed">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="img/logo.png" width="100" alt="logo">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle visible-xs visible-sm" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Log In</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                              </ul>
                            </li>
                            <li class="active"><a href="#">Help</a></li>
                            <li class="active"><a href="#">List your space</a></li>

                          </ul>
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Log Out</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
            </nav>
        </header>
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
                                        <a href="#" class="active">Description & Location</a>
                                        <a href="#" class="">Contact</a>
                                        <a href="#" class="">Photos</a>
                                        <a href="#" class="">Amenities & Attractions</a>
                                        <a href="#" class="">Rates</a>
                                        <a href="#" class="">Calendar</a>
                                    </div><!-- /.box-header -->
                                    <!-- form start -->
                                    <form role="form">
                                        <div class="box-body col-lg-12">

                                            <div class="well">
                                                <div class="row">
                                                    <div class="form-group col-md-3">
                                                        <label>King</label>
                                                        <select class="form-control">
                                                            <option>trest</option>
                                                            <option>trest</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Queen</label>
                                                        <select class="form-control">
                                                            <option>trest</option>
                                                            <option>trest</option>
                                                        </select>
                                                    </div>
                                                   <div class="form-group col-md-3">
                                                        <label>Double</label>
                                                        <select class="form-control">
                                                            <option>trest</option>
                                                            <option>trest</option>
                                                        </select>
                                                    </div>
                                                   <div class="form-group col-md-3">
                                                        <label>Twin / Single</label>
                                                        <select class="form-control">
                                                            <option>trest</option>
                                                            <option>trest</option>
                                                        </select>
                                                    </div>
                                                   <div class="form-group col-md-3">
                                                        <label>Child Bed</label>
                                                        <select class="form-control">
                                                            <option>trest</option>
                                                            <option>trest</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Baby Crib</label>
                                                        <select class="form-control">
                                                            <option>trest</option>
                                                            <option>trest</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Sleep Sofa/Futon</label>
                                                        <select class="form-control">
                                                            <option>trest</option>
                                                            <option>trest</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-group col-md-3">
                                                        <label>Note</label>
                                                        <input type="text" class="form-control">
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
                                                        <input type="email" class="form-control">
                                                        <input type="email" class="form-control">
                                                        <select class="form-control">
                                                            <option>Miles</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Beach</label>
                                                        <input type="email" class="form-control">
                                                        <input type="email" class="form-control">
                                                        <select class="form-control">
                                                            <option>Miles</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Farry</label>
                                                        <input type="email" class="form-control">
                                                        <input type="email" class="form-control">
                                                        <select class="form-control">
                                                            <option>Miles</option>
                                                        </select>
                                                      </div>
                                                    </div>

                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Train</label>
                                                        <input type="email" class="form-control">
                                                        <input type="email" class="form-control">
                                                        <select class="form-control">
                                                            <option>Miles</option>
                                                        </select>
                                                      </div>
                                                    </div>

                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Highway</label>
                                                        <input type="email" class="form-control">
                                                        <input type="email" class="form-control">
                                                        <select class="form-control">
                                                            <option>Miles</option>
                                                        </select>
                                                      </div>
                                                    </div>

                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Bar</label>
                                                        <input type="email" class="form-control">
                                                        <input type="email" class="form-control">
                                                        <select class="form-control">
                                                            <option>Miles</option>
                                                        </select>
                                                      </div>
                                                    </div>

                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Sky</label>
                                                        <input type="email" class="form-control">
                                                        <input type="email" class="form-control">
                                                        <select class="form-control">
                                                            <option>Miles</option>
                                                        </select>
                                                      </div>
                                                    </div>


                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Golf</label>
                                                        <input type="email" class="form-control">
                                                        <input type="email" class="form-control">
                                                        <select class="form-control">
                                                            <option>Miles</option>
                                                        </select>
                                                      </div>
                                                    </div>

                                                    <div class="form-inline  col-lg-12" >
                                                      <div class="form-group  col-lg-12">
                                                        <label class="col-lg-3" >Nearest Restraunt</label>
                                                        <input type="email" class="form-control">
                                                        <input type="email" class="form-control">
                                                        <select class="form-control">
                                                            <option>Miles</option>
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
                                                        <select class="form-control">
                                                            <option>Ask Owner</option>
                                                        </select>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Smoking  </label>
                                                        <select class="form-control">
                                                            <option>Ask Owner</option>
                                                        </select>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Wheelchairs</label>
                                                        <select class="form-control">
                                                            <option>Ask Owner</option>
                                                        </select>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label>Pets</label>
                                                        <select class="form-control">
                                                            <option>Ask Owner</option>
                                                        </select>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Min Age Limit for Retailers</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label class="checkbox"><input type="checkbox"><strong>Senior Adults Only Community</strong></label>
                                                        <textarea class="form-control"></textarea>
                                                    </div>
                                                 </div>
                                                 <div class="col-lg-12">
                                                    <div class="col-lg-4 form-group ">
                                                        <label class="checkbox"><input type="checkbox"><strong>Long-term Renters Welcome</strong></label>
                                                    </div>

                                                    <div class="col-lg-4 form-group ">
                                                        <label class="checkbox"><input type="checkbox"><strong>Events Allowed</strong></label>
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
