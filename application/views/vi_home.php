<?php
$this->load->helper('url');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TK Expedition</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>assets/css/jquery.bxslider.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/TK.png" />
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="tk_container">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">T.K. Expedition</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <!--<li class="active"><a href="#">Home</a></li>-->
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </div>
        </nav>

        <div class="tk_container" style="min-height: 600px;">
            <div class="row">
                <div class="col-md-6">
                    <div style="margin-bottom: 30px;">
                        <div class="tk_logo" >
                            <ul class="bxslider">
                                <li><img src="<?php echo base_url() ?>assets/img/TK.png" /></li>
                                <li><img src="<?php echo base_url() ?>assets/img/TK.png" /></li>
                                <li><img src="<?php echo base_url() ?>assets/img/TK.png" /></li>
                                <li><img src="<?php echo base_url() ?>assets/img/TK.png" /></li>
                                <li><img src="<?php echo base_url() ?>assets/img/TK.png" /></li>
                            </ul>
                        </div>
                        <div class="facebook_icon">
                            <a href="https://www.facebook.com/sudarsonosihotang?fref=ts"> <img src="<?php echo base_url() ?>assets/img/facebook.jpg" width="30" height="30"> </a>
                        </div>
                        <div class="tk_fb">
                            <h4>TK Expedition</h4>
                        </div>
                        <div class="clear"></div>
                        <div class="twitter_icon">
                            <a href="https://twitter.com/lukas_fam"> <img src="<?php echo base_url() ?>assets/img/twitter.jpg" width="30" height="30"> </a>
                        </div>
                        <div class="tk_twitter">
                            <h4>@TK_Expedition</h4>
                        </div>
                        <div class="clear"></div>
                        <div class="google_icon">
                            <a href="https://plus.google.com/106966006007984282724/posts"> <img src="<?php echo base_url() ?>assets/img/Google+.png" width="30" height="30"> </a>
                        </div>
                        <div class="tk_google">
                            <h4>TK_Expedition</h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tk_fitur_wrapper">
                        <div class="loading">
                            <img class="loadingimg" src="<?php base_url() ?>assets/img/loading.gif" />
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a class="tab_tarif" href="#home" data-toggle="tab">Cek Tarif</a></li>
                            <li><a class="tab_status" href="#profile" data-toggle="tab">Status Pengiriman</a></li>
                            <li><a class="tab_lokasi" href="#messages" data-toggle="tab">Lokasi Agent</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <div class="cek_tarif_form">
                                    <div class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">Kota asal</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="kota_asal">
                                                    <option value="Bandung">Bandung</option>
                                                    <option value="Jakarta">Jakarta</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-3 control-label">Kota tujuan</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="kota_tujuan">
                                                    <option value="Bandung">Bandung</option>
                                                    <option value="Jakarta">Jakarta</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">Berat <small>(kg)</small></label>
                                            <div class="col-sm-9">
                                                <input type="text" name="berat" class="form-control" id="inputEmail3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">Paket Pengiriman</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="paket_pengiriman">
                                                    <option value="regular">Regular</option>
                                                    <option value="kilat">Kilat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="button" name="cek_tarif" class="btn btn-info">Cek Tarif</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-info cek_tarif_result"></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile">
                                <div class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-sm-offset-1 col-sm-10">
                                            <small>Masukkan nomor pengiriman anda, kami akan menampilkan status kiriman anda.</small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Nomor Pengiriman</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="id" class="form-control" id="inputEmail3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="button" name="cek_status" class="btn btn-info">Cek Status</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-info cek_status_kirim_result"></div>
                            </div>
                            <div class="tab-pane" id="messages">
                                <div class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-sm-offset-1 col-sm-10">
                                            <small>Masukkan nama kota anda, kami akan menampilkan alamat agen kami berdasarkan kota anda.</small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Nama Kota</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="kota">
                                                <option value="Bandung">Bandung</option>
                                                <option value="Jakarta">Jakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="button" name="show_agen" class="btn btn-info">Tampilkan Alamat Agen </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-info tampilkan_agen_result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body" style="text-align:center">
                            <img class="modal-img" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="tk_container_footer">
            <div class="tk_footer">
                <small>&copy; 2014 T.K Expedition</small>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url() ?>assets/js/jquery-1.11.0.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.bxslider.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/app.js"></script>
    </body>
</html>
