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
                                            <div class="form-inline">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Season Name">
                                                </div>
                                                <div class="form-group">
                                                   <select class="form-control">
                                                       <option>Minimum Stay</option>
                                                   </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="text" class="form-control pull-right" id="reservation"/>
                                                    </div><!-- /.input group -->
                                                </div><!-- /.form group -->
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Nightly">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Weekly">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Monthly">
                                                </div>
                                                 <div class="form-group">
                                                    <input type="submit" class="btn btn-success" value="Save" >
                                                </div>
                                            </div>
                                            <div class="page-header"></div>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Season name</th>
                                                    <th>Starts</th>
                                                    <th>Ends</th>
                                                    <th>AMin Stay</th>
                                                    <th >Weekday</th>
                                                    <th >Weekly</th>
                                                    <th >Monthly</th>
                                                    <th >Delete</th>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td>2014-09-24</td>
                                                    <td>2014-09-24</td>
                                                    <td></td>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                    <td>Delete</td>

                                                </tr>
                                                <tr>
                                                    <td>Lovesmok</td>
                                                    <td>2014-09-24</td>
                                                    <td>2014-09-24</td>
                                                    <td></td>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                    <td>Delete</td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>2014-09-24</td>
                                                    <td>2014-09-24</td>
                                                    <td></td>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                    <td>Delete</td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>2014-09-24</td>
                                                    <td>2014-09-24</td>
                                                    <td>Coderocks</td>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                    <td>Delete</td>

                                                </tr>
                                            </table>
                                        </div><!-- /.box-body -->
                                        <div class="box-body col-lg-8">
                                            <div class="form-inline">
                                                <h4>Fees and Taxes</h4>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Pet Fee" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Cleaning Fee" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Taxes" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-inline">
                                                <h4>Damage Protection</h4>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Damage Protection" class="form-control">
                                                </div>
                                            </div>
                                            <h4>Payment Terms</h4>
                                                        <textarea id="editor1" name="editor1" rows="10" cols="80">
                                                        </textarea>
                                            
                                            </div><!-- /.box-body -->
                                        <div class="clearfix"></div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-danger">Save and Finish Listing</button>
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
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>        
        <!-- CK Editor -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>

        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
            <script type="text/javascript">

            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();

            });
            $(function() {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();

                //Date range picker
                $('#reservation').daterangepicker();
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
                //Date range as a button
                $('#daterange-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'Last 7 Days': [moment().subtract('days', 6), moment()],
                                'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
                );

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal',
                    radioClass: 'iradio_minimal'
                });
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                });
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-red',
                    radioClass: 'iradio_flat-red'
                });



                //Timepicker
                $(".timepicker").timepicker({
                    showInputs: false
                });
            });
        </script>

    </body>
</html>
