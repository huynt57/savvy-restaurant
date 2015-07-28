<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <meta name="language" content="en">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
        <!-- Bootstrap responsive -->
        <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-responsive.min.css') }}">
        <!-- jQuery UI -->
        <link rel="stylesheet" href="{{ asset('admin/css/plugins/jquery-ui/smoothness/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css') }}">
        <!-- dataTables -->
        <link rel="stylesheet" href="{{ asset('admin/css/plugins/datatable/TableTools.css') }}">
        <!-- chosen -->
        <link rel="stylesheet" href="{{ asset('admin/css/plugins/chosen/chosen.css') }}">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
        <!-- Color CSS -->
        <link rel="stylesheet" href="{{ asset('admin/css/themes.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/plugins/timepicker/bootstrap-timepicker.min.css') }}">

        <!-- jQuery -->
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

        <!-- Nice Scroll -->
        <script src="{{ asset('admin/js/plugins/nicescroll/jquery.nicescroll.min.js') }}"></script>
        <!-- imagesLoaded -->
        <script src="{{ asset('admin/js/plugins/imagesLoaded/jquery.imagesloaded.min.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

        <!-- jQuery UI -->
        <script src="{{ asset('admin/js/plugins/jquery-ui/jquery.ui.core.min.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/jquery-ui/jquery.ui.widget.min.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/jquery-ui/jquery.ui.mouse.min.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/jquery-ui/jquery.ui.resizable.min.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/jquery-ui/jquery.ui.sortable.min.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/jquery-ui/jquery.ui.datepicker.min.js') }}"></script>
        <!-- slimScroll -->
        <script src="{{ asset('admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
        <!-- Bootbox -->
        <script src="{{ asset('admin/js/plugins/bootbox/jquery.bootbox.js') }}"></script>
        <!-- dataTables -->
        <script src="{{ asset('admin/js/plugins/datatable/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/datatable/TableTools.min.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/datatable/ColReorderWithResize.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/datatable/ColVis.min.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/datatable/jquery.dataTables.columnFilter.js') }}"></script>
        <script src="{{ asset('admin/js/plugins/datatable/jquery.dataTables.grouping.js') }}"></script>
        <!-- Chosen -->
        <script src="{{ asset('admin/js/plugins/chosen/chosen.jquery.min.js') }}"></script>


        <!-- Theme framework -->
        <script src="{{ asset('admin/js/eakroko.min.js') }}"></script>
        <!-- Theme scripts -->
        <script src="{{ asset('admin/js/application.min.js') }}"></script>
        <!-- Just for demonstration -->
        <script src="{{ asset('admin/js/demonstration.min.js') }}"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.5/angular.min.js"></script>


        <title>Administrator management</title>
    </head>

    <body> 


        <!-- BEGIN -->

        <div id="navigation">
            <div class="container-fluid">
                <a href="#" id="brand">Restaurant management</a>			
                <div class="user">
                    <div class="dropdown">
                        <a href="#" class='dropdown-toggle' data-toggle="dropdown">Admin </a>
                        <ul class="dropdown-menu pull-right">						
                            
                            <li>
                                <a href="">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>	
        @yield('content')

        <div class="clear"></div>

        <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> by Restaurant management.<br/>
            All Rights Reserved.<br/>    	
        </div><!-- footer -->



    </body>
</html>
