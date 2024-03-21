<?php 
    include"koneksi.php";
    session_start();
    if (isset($_SESSION['admin'])) {
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kecamatan Batuceper</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->
        <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <?php 
            } else {
                echo "<script>alert('Anda harus login terlebih dahulu yah');
                window.location='../perjalanandinas/login.php';
                </script>";
            } 
            ?>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="admin.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->

                 <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Halaman Data</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tdasar.php">Data Dasar</a></li>
                            <li><i class="fa fa-table"></i><a href="tpegawai.php">Data Pegawai</a></li>
                            <li><i class="fa fa-table"></i><a href="tjabatan.php">Data Jabatan</a></li>
                            <li><i class="fa fa-table"></i><a href="tempat.php">Data Tempat</a></li>
                            <li><i class="fa fa-table"></i><a href="tujuan.php">Data Tujuan</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-edit"></i>Transaksi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tspt.php">Surat Perintah Tugas</a></li>
                            <li><i class="fa fa-table"></i><a href="tkwitansi.php">Kwitansi Perjalanan</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-files-o"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tlpd.php">Laporan Perjalanan Dinas</a></li>
                            <li><i class="fa fa-table"></i><a href="formrekap.php">Rekap Biaya Perjalanan</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                  </div>      
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Form Surat Perintah Tugas</strong>
                      </div>
                       <div class="card-body card-block">
                    <form action="simpanspt.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">
                            <input type="hidden" name="no_spt">

                    <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="kd_dasar" class=" form-control-label">Dasar</label>
                            </div>
                        <div class="col col-md-9">
                            <select name="kd_dasar" class="form-control" required="">
                                <option>Pilih Dasar</option>
                                <?php $dasar=mysqli_query($db, "SELECT * FROM dasar");
                                while ($data=mysqli_fetch_array($dasar))
                                {
                                ?>
                                <option required="" value="<?php echo $data['kd_dasar'];?>">
                                    <?php echo $data['nama_dasar']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="kd_user" class=" form-control-label">Nama Pegawai</label>
                            </div>
                        <div class="col col-md-9">
                            <select name="kd_user" class="form-control" required="">
                                <option>Pilih Pegawai</option>
                                <?php $pegawai=mysqli_query($db, "SELECT * FROM user WHERE role='pegawai'");
                                while ($data=mysqli_fetch_array($pegawai))
                                {
                                ?>
                                <option required="" value="<?php echo $data['kd_user'];?>">
                                    <?php echo $data['nama_lengkap']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="kd_jabatan" class=" form-control-label">Jabatan</label>
                            </div>
                        <div class="col col-md-9">
                            <select name="kd_jabatan" class="form-control" required="">
                                <option>Pilih Jabatan</option>
                                <?php $jabatan=mysqli_query($db, "SELECT * FROM jabatan");
                                while ($data=mysqli_fetch_array($jabatan))
                                {
                                ?>
                                <option required="" value="<?php echo $data['kd_jabatan'];?>">
                                    <?php echo $data['nama_jabatan']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="dalam_rangka" class=" form-control-label">Dalam Rangka</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="dalam_rangka" placeholder="Enter Dalam Rangka" class="form-control" required="">
                            <btn class="form-text text-muted">This is a help text</btn>
                        </div>
                    </div>

                    <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="kd_wilayah" class=" form-control-label">Tujuan</label>
                            </div>
                        <div class="col col-md-9">
                            <select name="kd_tujuan" class="form-control" required="">
                                <option>Pilih Tujuan</option>
                                <?php $tujuan=mysqli_query($db, "SELECT * FROM tujuan");
                                while ($data=mysqli_fetch_array($tujuan))
                                {
                                ?>
                                <option required="" value="<?php echo $data['kd_tujuan'];?>">
                                    <?php echo $data['nama_tujuan']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="kd_tempat" class=" form-control-label">Tempat</label>
                            </div>
                        <div class="col col-md-9">
                            <select name="kd_tempat" class="form-control" required="">
                                <option>Pilih Tempat</option>
                                <?php $tempat=mysqli_query($db, "SELECT * FROM tempat");
                                while ($data=mysqli_fetch_array($tempat))
                                {
                                ?>
                                <option required="" value="<?php echo $data['kd_tempat'];?>">
                                    <?php echo $data['nama_tempat']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="lamanya" class=" form-control-label">Selama</label>
                        </div>
                        <div class="col-12 col-md-5">
                            <input type="number" name="lamanya" required="" placeholder="" class="form-control">
                            <btn class="form-text text-muted">This is a help text</btn>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="tgl_berangkat" class=" form-control-label">Tanggal Berangkat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" name="tgl_berangkat" required="" placeholder="Enter Tanggal Berangkat" class="form-control">
                            <btn class="form-text text-muted">This is a help text</btn>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="tgl_kembali" class=" form-control-label">Tanggal Kembali</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" name="tgl_kembali" required="" placeholder="Enter Tanggal Kembali" class="form-control">
                            <btn class="form-text text-muted">This is a help text</btn>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="tempat_keluar" class=" form-control-label">Tempat Keluarnya Surat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="tempat_keluar" required="" placeholder="Enter Tempat" class="form-control">
                            <btn class="form-text text-muted">This is a help text</btn>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="tgl_keluar" class=" form-control-label">Tanggal Keluarnya Surat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" name="tgl_keluar" required="" placeholder="Enter Tanggal Keluarnya Surat" class="form-control">
                            <btn class="form-text text-muted">This is a help text</btn>
                        </div>
                    </div>


                    <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="jabatan" class=" form-control-label">Status</label>
                            </div>
                        <div class="col col-md-9">
                            <select name="status" class="form-control" required="">
                                <option>Pilih Status</option>
                                <option value="Telah Dilaksanakan">Telah Dilaksanakan</option>
                                <option value="Sedang Dalam Perjalanan Dinas">Sedang Dalam Perjalanan Dinas</option>
                                </select>
                        </div>
                    </div>

                     <div class="card-footer">
                        <button type="submit" name="btnSave" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" name="btnReset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>

                  
    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
