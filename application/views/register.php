<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register | jeweler - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('jeweler-master/'); ?>img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="<?php echo base_url('jeweler-master/'); ?>https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
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
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/normalize.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('jeweler-master/'); ?>css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url('jeweler-master/'); ?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url('jeweler-master/'); ?>http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <p><h3>Registration</h3></p>
                    
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form role="form" method="post" action="<?php echo base_url('kontrol/regis'); ?>">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>ID</label>
                                    <input type="hidden" name="id_user" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Full Name</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" name="pwd" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Level</label>
                                    <select><option></option>
                                        <option>Admin</option>
                                        <option>Seller</option>
                                        <option>Customer</option></select>
                                </div>
                                <div class="checkbox col-lg-12">
                                    <input type="checkbox" class="i-checks" checked> Sigh up for our newsletter
                                </div>
                            </div>
                            <div class="text-center">
                               <button type="submit" class="btn btn-primary mt-4">Register</button> </a> 
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright &copy; 2018 <a href="<?php echo base_url('jeweler-master/'); ?>https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
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