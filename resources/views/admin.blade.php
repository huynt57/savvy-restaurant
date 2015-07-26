<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <meta name="language" content="en">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap.min.css">
        <!-- Bootstrap responsive -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap-responsive.min.css">
        <!-- jQuery UI -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/jquery-ui/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
        <!-- dataTables -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/datatable/TableTools.css">
        <!-- chosen -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/chosen/chosen.css">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/style.css">
        <!-- Color CSS -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/themes.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/timepicker/bootstrap-timepicker.min.css">

        <!-- jQuery -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.min.js"></script>

        <!-- Nice Scroll -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- imagesLoaded -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/timepicker/bootstrap-timepicker.min.js"></script>

        <!-- jQuery UI -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/jquery-ui/jquery.ui.datepicker.min.js"></script>
        <!-- slimScroll -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap.min.js"></script>
        <!-- Bootbox -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/bootbox/jquery.bootbox.js"></script>
        <!-- dataTables -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/datatable/TableTools.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/datatable/ColReorderWithResize.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/datatable/ColVis.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/datatable/jquery.dataTables.columnFilter.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/datatable/jquery.dataTables.grouping.js"></script>
        <!-- Chosen -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/chosen/chosen.jquery.min.js"></script>


        <!-- Theme framework -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/eakroko.min.js"></script>
        <!-- Theme scripts -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/application.min.js"></script>
        <!-- Just for demonstration -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/demonstration.min.js"></script>


        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body> 


        <!-- BEGIN -->



        <div class="masthead">
            <h1 class="text-muted">Vip Service Control Panel</h1>
        </div>

        <div id="navigation">
            <div class="container-fluid">
                <a href="#" id="brand">Control Panel</a>			
                <div class="user">
                    <div class="dropdown">
                        <a href="#" class='dropdown-toggle' data-toggle="dropdown">Admin <?php echo Yii::app()->session['username'] ?></a>
                        <ul class="dropdown-menu pull-right">						
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('admin/home/changePassword') ?>">Change password</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('admin/home/logout') ?>">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>	
        <?php echo $content; ?>

        <div class="clear"></div>

        <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> by VipService.<br/>
            All Rights Reserved.<br/>    	
        </div><!-- footer -->



    </body>
</html>
