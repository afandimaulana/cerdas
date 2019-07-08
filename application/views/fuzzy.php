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
                    <a class="navbar-brand" href="<?php echo base_url('/'); ?>">SISTEM KELAYAKAN PENGAJUAN KREDIT</a>
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
                            <a href="<?php echo base_url('fuzzy'); ?>">
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
                            <h2>FUZZY LOGIC</h2>
                        </div>
                        <div class="body">
                            <form class="form_advanced_validation" id="form" method="post">
                                <label>BERAPA JUMLAH PENGHASILAN ANDA (Juta)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="gaji" name="gaji" class="form-control" placeholder="Masukan Pemasukan Dalam Juta">
                                    </div>
                                </div>
                                <label>BERAPA JUMLAH ASSET ANDA (Biji)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="asset" name="asset" class="form-control" placeholder="Masukan Asset dalam Biji">
                                    </div>
                                </div>

                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example | Vertical Layout -->

              <!-- Default Size -->
              <div class="modal fade" id="defaultModal" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">RESULT FUZZY</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="val1">HASIL FUZIFIKASI</label>
                                <div class="form-line">
                                    <!-- <input type="text" id="val1" name="fuzifikasi" class="form-control" readonly/> -->
                                    <textarea name="fuzifikasi" id="fuzifikasi" cols="70" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="val2">HASIL DEFUZIFIKASI</label>
                                <div class="form-line">
                                    <input type="text" id="val2" name="defuzifikasi" class="form-control" readonly/>
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

        <script>
            $(function(){
                $('#form').on('submit', function(e){
                    e.preventDefault();
                    $.ajax({
                        url: "<?php echo base_url('index.php/fuzzy/proses'); ?>", //this is the submit URL
                        type: 'POST', //or POST
                        data: $('#form').serialize(),
                        success: function(data){
                            var obj=JSON.parse(data);
                            //alert("Data Loaded: " + data);

                            $('[name="fuzifikasi"]').val(obj.fuzifikasi);
                            $('[name="defuzifikasi"]').val(obj.defuzifikasi);
                            $('#defaultModal').modal('show');
                            $('.modal-title').text('RESULT FUZZY');
                        }
                    });
                });
            });
            function refresh() {
                location.reload();
            }
        </script>
    </body>
</html>