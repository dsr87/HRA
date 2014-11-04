<?php 
include("headerSteps.php");
?>
<link type="text/css" href="css/uploader.css" rel="stylesheet"/>

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
                                         
                                    <form name="fileUpload" id="fileUpload" action="javascript:void(0);" enctype="multipart/form-data">

<div class="file_browser"><input type="file" name="multiple_files[]" id="_multiple_files" class="hide_broswe" multiple="" style="
    width: 152px;
"></div>
<div class="file_upload"><input type="submit" value="Upload" class="upload_button" style="
    width: 128px;
"> </div>
</form>  
                              
                                 
                                </div><!-- /.box -->
                          

                        </div><!--/.col (left) -->
                    </div><!-- row -->

                </section><!-- /.content -->
                

            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

	


<div class="file_boxes">

</div>
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
        <script src="../../js/uploader.js" type="text/javascript"></script>
        <script type="text/javascript">
			$(document).ready(function()
			{
				new multiple_file_uploader
				({
					form_id: "fileUpload", 
					autoSubmit: true,
					server_url: "uploader.php" // PHP file for uploading the browsed files
				});
			});
		</script>
        
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
