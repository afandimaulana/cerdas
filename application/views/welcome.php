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
                    <a class="navbar-brand" href="<?php echo base_url('/'); ?>">SISTEM PAKAR PEMILIHAN JENIS MOTOR</a>
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
                        &copy; <?php echo date('Y'); ?> <a href="javascript:void(0);">ARTIFICIAL INTELLEGENT</a>.
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
        </section>
        <section class="content">
            <!-- Basic Example | Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>CERTAINTY FACTOR</h2>
                        </div>
                        <div class="body">
                        <?php echo form_open('index.php/Welcome/perhitungan', array('enctype' => 'multipart/form-data','class' => 'form_advanced_validation', 'autocomplete' => 'off' ,'id'=>'form')); ?>
                            <!-- <form id="form" > -->
                                <div id="wizard_vertical">
                                    <h2>Question 1</h2>
                                    <section>
                                        <div class="form-group form-float">
                                            <label class="form-label">APAKAH ANDA INGIN MOBIL BERBODY BESAR ?</label>
                                            <br><br>
                                            <div class="row clearfix">
                                                <div class="col-md-12">
                                                    <input type="radio" name="q1" id="radio_1" class="with-gap radio-col-red" value="1"/>
                                                    <label for="radio_1">YA</label>
                                                    <!-- <input name="group1" type="radio" id="radio_1" checked /> -->
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="radio" name="q1" id="radio_2" class="with-gap radio-col-pink" value="0.6"/>
                                                    <label for="radio_2">MUNGKIN IYA</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="radio" name="q1" id="radio_3" class="with-gap radio-col-pink" value="0.05"/>
                                                    <label for="radio_3">TIDAK TAHU</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="radio" name="q1" id="radio_4" class="with-gap radio-col-pink" value="-0.6"/>
                                                    <label for="radio_4">MUNGKIN TIDAK</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="radio" name="q1" id="radio_5" class="with-gap radio-col-pink" value="-1"/>
                                                    <label for="radio_5">TIDAK</label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h2>Question 2</h2>
                                    <section>
                                        <div class="form-group form-float">
                                            <label class="form-label">APAKAH ANDA INGIN MOBIL BERBODY KECIL ?</label>
                                            <br><br>
                                            <div class="row clearfix">
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q2" id="radio_6" class="with-gap radio-col-red" value="1"/>
                                                    <label for="radio_6">YA</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q2" id="radio_7" class="with-gap radio-col-red" value="0.6"/>
                                                    <label for="radio_7">MUNGKIN IYA</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q2" id="radio_8" class="with-gap radio-col-red" value="0.05"/>
                                                    <label for="radio_8">TIDAK TAHU</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q2" id="radio_9" class="with-gap radio-col-red" value="-0.6"/>
                                                    <label for="radio_9">MUNGKIN TIDAK</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q2" id="radio_10" class="with-gap radio-col-red" value="-1"/>
                                                    <label for="radio_10">TIDAK</label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h2>Question 3</h2>
                                    <section>
                                        <div class="form-group form-float">
                                            <label class="form-label">APAKAH ANDA INGIN MOBIL MEMUAT BANYAK ORANG  ?</label>
                                            <br><br>
                                            <div class="row clearfix">
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q3" id="radio_11" class="with-gap radio-col-red" value="1"/>
                                                    <label for="radio_11">YA</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q3" id="radio_12" class="with-gap radio-col-red" value="0.6"/>
                                                    <label for="radio_12">MUNGKIN IYA</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q3" id="radio_13" class="with-gap radio-col-red" value="0.05"/>
                                                    <label for="radio_13">TIDAK TAHU</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q3" id="radio_14" class="with-gap radio-col-red" value="-0.6"/>
                                                    <label for="radio_14">MUNGKIN TIDAK</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q3" id="radio_15" class="with-gap radio-col-red" value="-1"/>
                                                    <label for="radio_15">TIDAK</label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h2>Question 4</h2>
                                    <section>
                                        <div class="form-group form-float">
                                            <label class="form-label">APAKAH ANDA INGIN HEMAT BAHAN BAKAR ?</label>
                                            <br><br>
                                            <div class="row clearfix">
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q4" id="radio_16" class="with-gap radio-col-red" value="1"/>
                                                    <label for="radio_16">YA</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q4" id="radio_17" class="with-gap radio-col-red" value="0.6"/>
                                                    <label for="radio_17">MUNGKIN IYA</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q4" id="radio_18" class="with-gap radio-col-red" value="0.05"/>
                                                    <label for="radio_18">TIDAK TAHU</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q4" id="radio_19" class="with-gap radio-col-red" value="-0.6"/>
                                                    <label for="radio_19">MUNGKIN TIDAK</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q4" id="radio_20" class="with-gap radio-col-red" value="-1"/>
                                                    <label for="radio_20">TIDAK</label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h2>Question 5</h2>
                                    <section>
                                        <div class="form-group form-float">
                                            <label class="form-label">APAKAH ANDA INGIN BAGASI MOBIL YANG BESAR ?</label>
                                            <br><br>
                                            <div class="row clearfix">
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q5" id="radio_21" class="with-gap radio-col-red" value="1"/>
                                                    <label for="radio_21">YA</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q5" id="radio_22" class="with-gap radio-col-red" value="0.6"/>
                                                    <label for="radio_22">MUNGKIN IYA</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q5" id="radio_23" class="with-gap radio-col-red" value="0.05"/>
                                                    <label for="radio_23">TIDAK TAHU</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q5" id="radio_24" class="with-gap radio-col-red" value="-0.6"/>
                                                    <label for="radio_24">MUNGKIN TIDAK</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input  type="radio" name="q5" id="radio_25" class="with-gap radio-col-red" value="-1"/>
                                                    <label for="radio_25">TIDAK</label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h2>Question 6</h2>
                                    <section>
                                        <div class="form-group form-float">
                                            <label class="form-label">APAKAH ANDA INGIN MOBIL DIATAS 2000 CC ?</label>
                                            <br><br>
                                            <div class="row clearfix">
                                                <div class="col-md-12">
                                                    <input type="radio" name="q6" id="radio_26" class="with-gap radio-col-red" value="1"/>
                                                    <label for="radio_26">YA</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="radio" name="q6" id="radio_27" class="with-gap radio-col-red" value="0.6"/>
                                                    <label for="radio_27">MUNGKIN IYA</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="radio" name="q6" id="radio_28" class="with-gap radio-col-red" value="0.05"/>
                                                    <label for="radio_28">TIDAK TAHU</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="radio" name="q6" id="radio_29" class="with-gap radio-col-red" value="-0.6"/>
                                                    <label for="radio_29">MUNGKIN TIDAK</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="radio" name="q6" id="radio_30" class="with-gap radio-col-red" value="-1"/>
                                                    <label for="radio_30">TIDAK</label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h2>Question 7</h2>
                                    <section>
                                        <div class="form-group form-float">
                                            <label class="form-label">APAKAH ANDA INGIN MOBIL DIBAWAH 2000 CC ?</label>
                                            <br><br>
                                            <div class="row clearfix">
                                                <div class="col-md-12">
                                                    <input type="radio" name="q7" id="radio_31" class="with-gap radio-col-red" value="1"/>
                                                    <label for="radio_31">YA</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="radio" name="q7" id="radio_32" class="with-gap radio-col-red" value="0.6"/>
                                                    <label for="radio_32">MUNGKIN IYA</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="radio" name="q7" id="radio_33" class="with-gap radio-col-red" value="0.05"/>
                                                    <label for="radio_33">TIDAK TAHU</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="radio" name="q7" id="radio_34" class="with-gap radio-col-red" value="-0.6"/>
                                                    <label for="radio_34">MUNGKIN TIDAK</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="radio" name="q7" id="radio_35" class="with-gap radio-col-red" value="-1"/>
                                                    <label for="radio_35">TIDAK</label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example | Vertical Layout -->

             <!-- Default Size -->
             <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">RESULT CF</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="val1">HATCHBACK</label>
                                <div class="form-line">
                                    <input type="text" id="val1" name="sport" class="form-control" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="val2">MPV</label>
                                <div class="form-line">
                                    <input type="text" id="val2" name="bebek" class="form-control" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="val3">SEDAN</label>
                                <div class="form-line">
                                    <input type="text" id="val3" name="matic" class="form-control" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="val4">RESULT</label>
                                <div class="form-line">
                                    <textarea name="result" id="result" cols="50" rows="5" readonly></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal" onclick="refresh()">CLOSE</button>
                        </div>
                    </div>
                </div>
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