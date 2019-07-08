<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>ARTIFICIAL INTELLEGENT</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core Css -->
        <link href="<?php echo base_url('asset/home/'); ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Waves Effect Css -->
        <link href="<?php echo base_url('asset/home/'); ?>plugins/node-waves/waves.css" rel="stylesheet" />
        <!-- Animation Css -->
        <link href="<?php echo base_url('asset/home/'); ?>plugins/animate-css/animate.css" rel="stylesheet" />
        <!-- Morris Chart Css-->
        <link href="<?php echo base_url('asset/home/'); ?>plugins/morrisjs/morris.css" rel="stylesheet" />
        <!-- Bootstrap Select Css -->
        <link href="<?php echo base_url('asset/home/'); ?>plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Custom Css -->
        <link href="<?php echo base_url('asset/home/'); ?>css/style.css" rel="stylesheet">
        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="<?php echo base_url('asset/home/'); ?>css/themes/all-themes.css" rel="stylesheet" />
    </head>
    <body class="theme-black">
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="<?php echo base_url('/'); ?>">AI for Life</a>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="<?php echo base_url('asset/home/'); ?>images/user.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADMIN</div>
                        <div class="email">admin@superuser.com</div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                    <li class="header">MENU UTAMA</li>
                        <li>
                            <a href="<?php echo base_url('Home'); ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Welcome'); ?>">
                            <i class="material-icons">compare_arrows</i>
                            <span>Certainty Factory</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Fuzzy'); ?>">
                            <i class="material-icons">explore</i>
                            <span>Fuzzy Logic</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; <?php echo date('Y'); ?> <a href="javascript:void(0);">ARTIFICIAL INTELLIGENT</a>.
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
        </section>
        <section class="content">
            <div class="row clearfix">
                <h1>ARTIFICIAL INTELLIGENT</h1>
            </div>
        </section>
        <!-- Jquery Core Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/bootstrap/js/bootstrap.js"></script>
        <!-- Select Plugin Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <!-- Slimscroll Plugin Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- Waves Effect Plugin Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/node-waves/waves.js"></script>
        <!-- Select Plugin Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <!-- Jquery Validation Plugin Css -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/jquery-validation/jquery.validate.js"></script>
        <!-- JQuery Steps Plugin Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/jquery-steps/jquery.steps.js"></script>
        <!-- Custom Js -->
        <script src="<?php echo base_url('asset/home/'); ?>js/admin.js"></script>
        <script src="<?php echo base_url('asset/home/'); ?>js/pages/forms/form-wizard.js"></script>
        <!-- Demo Js -->
        <script src="<?php echo base_url('asset/home/'); ?>js/demo.js"></script>
    </body>
</html>