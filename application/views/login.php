<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | jeweler - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('jeweler-master/'); ?>img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?><?php echo base_url('jeweler-master/'); ?>css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?><?php echo base_url('jeweler-master/'); ?>css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/metisM<?php echo base_url('jeweler-master/'); ?>enu/metisMenu-vertical.css">
    <!-- calendar CSS
		======<?php echo base_url('jeweler-master/'); ?>====================================== -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CS<?php echo base_url('jeweler-master/'); ?>S
		======<?php echo base_url('jeweler-master/'); ?>====================================== -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?><?php echo base_url('jeweler-master/'); ?>css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

   
    <div class="container-fluid">
        <div class="row">
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>LOGIN</h3>
                </div>
                <div class="hpanel">
             <div class="panel-body">
                        <form method="post" action="<?php echo base_url('kontrol/awal') ?>">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text"  name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input placeholder="******" type="password" name="pwd" class="form-control">
                                <span class="help-block small">Your password has strong</span>
                            </div>
                            <div class="checkbox login-checkbox">
                               <p class="help-block small">(if this is a private computer)</p>
                            </div>
                            <a href="<?php echo base_url('awal/') ?>"><button type="submit" class="btn btn-success btn-block loginbtn">Login</button></a>
                            <a href="<?php echo base_url('kontrol/register'); ?>" class="btn btn-default btn-block">Register</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> Fidha Zaenn.</p>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url('jeweler-master/'); ?>js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url('jeweler-master/'); ?>js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url('jeweler-master/'); ?>js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/main.js"></script>
</body>

</html>