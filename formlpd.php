<?php 
    include"koneksi.php";
    session_start();
    if (isset($_SESSION['pegawai'])) {
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
                        <a href="pegawai.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    
                    <li>
                        <?php 
                        if (isset($_SESSION['pegawai'])) {
                        $user=$_SESSION['pegawai'];
                        $sql="SELECT * FROM user WHERE kd_user='$user'";
                        $query=mysqli_query($db,$sql);
                        $data=mysqli_fetch_array($query);
                         ?>
                        <?php echo"<a href='tkwitansipegawai.php?nama_lengkap=$data[nama_lengkap]'><i class='menu-icon fa fa-file-o'></i>Kwitansi Perjalanan</a>";}
                        else{
                            echo "<script>alert('Login dulu kontol')
                            window.location= 'login.php'</script>";
                        }
                        ?>
                    </li>
                    <li>
                        <?php 
                        if (isset($_SESSION['pegawai'])) {
                        $user=$_SESSION['pegawai'];
                        $sql="SELECT * FROM user WHERE kd_user='$user'";
                        $query=mysqli_query($db,$sql);
                        $data=mysqli_fetch_array($query);
                         ?>
                        <?php echo"<a href='tsptpegawai.php?nama_lengkap=$data[nama_lengkap]'><i class='menu-icon fa fa-files-o'></i>Surat Perintah Tugas</a>";}
                        else{
                            echo "<script>alert('Login dulu kontol')
                            window.location= 'login.php'</script>";
                        }
                        ?>
                    </li>
                    <li>
                        <?php 
                        if (isset($_SESSION['pegawai'])) {
                        $user=$_SESSION['pegawai'];
                        $sql="SELECT * FROM user WHERE kd_user='$user'";
                        $query=mysqli_query($db,$sql);
                        $data=mysqli_fetch_array($query);
                         ?>
                        <?php echo"<a href='tlpdpegawai.php?nama_lengkap=$data[nama_lengkap]'><i class='menu-icon fa fa-edit'></i>Surat Perintah Tugas</a>";}
                        else{
                            echo "<script>alert('Login dulu kontol')
                            window.location= 'login.php'</script>";
                        }
                        ?>
                    </li>
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

                <?php 
                $no_spt=$_GET['no_spt'];
                $sql="SELECT * FROM spt JOIN user ON spt.kd_user=user.kd_user
                                        JOIN jabatan ON spt.kd_jabatan=jabatan.kd_jabatan
                                        JOIN tujuan ON spt.kd_tujuan=tujuan.kd_tujuan
                                        JOIN tempat ON spt.kd_tempat=tempat.kd_tempat
                                        JOIN dasar ON spt.kd_dasar=dasar.kd_dasar WHERE no_spt='$no_spt'";
                $query=mysqli_query($db,$sql);
                while ($data=mysqli_fetch_array($query)) {
                ?>

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Form Laporan Perjalanan Dinas</strong>
                      </div>
                       <div class="card-body card-block">
                    <form action="simpanlpd.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">
                                <input type="text" name="no_spt" value="<?php echo $data['no_spt']; ?>" placeholder="" class="form-control" hidden="">
                                <input type="text" name="kd_user" value="<?php echo $data['kd_user']; ?>" placeholder="" class="form-control" hidden="">
                                <input type="text" name="kd_dasar" value="<?php echo $data['kd_dasar']; ?>" placeholder="" class="form-control" hidden="">
                                <input type="text" name="kd_tempat" value="<?php echo $data['kd_tempat']; ?>" placeholder="" class="form-control" hidden="">
                                <input type="text" name="kd_tujuan" value="<?php echo $data['kd_tujuan']; ?>" placeholder="" class="form-control" hidden="">
                                <input type="text" name="kd_jabatan" value="<?php echo $data['kd_jabatan']; ?>" placeholder="" class="form-control" hidden="">
                           
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Nama Dasar</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="nama_dasar" value="<?php echo $data['nama_dasar']; ?>" readonly="" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                              </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Nama Pegawai</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>" readonly="" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                              </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Jabatan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="nama_jabatan" value="<?php echo $data['nama_jabatan']; ?>" readonly="" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                              </div>


                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Dalam Rangka</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="dalam_rangka" value="<?php echo $data['dalam_rangka']; ?>" readonly="" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                              </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Tujuan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="nama_tujuan" value="<?php echo $data['nama_tujuan']; ?>" readonly="" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                              </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Tempat</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="nama_tempat" value="<?php echo $data['nama_tempat']; ?>" readonly="" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                              </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Selama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="number" name="lamanya" value="<?php echo $data['lamanya']; ?>" readonly="" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                              </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Tanggal Berangkat</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="date" name="tgl_berangkat" value="<?php echo $data['tgl_berangkat']; ?>" readonly="" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                              </div>


                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Tanggal Kembali</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="date" name="tgl_kembali" value="<?php echo $data['tgl_kembali']; ?>" readonly="" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                              </div>


                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Tempat Keluarnya Surat</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="tempat_keluar" value="<?php echo $data['tempat_keluar']; ?>" readonly="" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                              </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Tanggal Keluarnya Surat</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="date" name="tgl_keluar" value="<?php echo $data['tgl_keluar']; ?>" readonly="" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                              </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="status" class=" form-control-label">Status</label>
                            </div>
                            <div class="col col-md-9">
                            <select name="status" class="form-control" required="">
                                <option>Pilih Status</option>
                                <option value="Telah Dilaksanakan">Telah Dilaksanakan</option>
                                <option value="Sedang Dalam Perjalanan Dinas">Sedang Dalam Perjalanan Dinas</option>
                                </select>
                            </div>
                        </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hasil_perjalanan" class=" form-control-label">Hasil Perjalanan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="hasil_perjalanan" required="" placeholder="Enter Hasil Perjalanan" class="form-control">
                            <btn class="form-text text-muted"></btn>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="tempat_laporan" class=" form-control-label">Tempat Laporan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="tempat_laporan" required="" placeholder="Enter Tempat" class="form-control">
                            <btn class="form-text text-muted"></btn>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="tgl_laporan" class=" form-control-label">Tanggal Laporan</label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="date" name="tgl_laporan" required="" placeholder="Enter Tanggal" class="form-control">
                            <btn class="form-text text-muted"></btn>
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
                    <?php 
                    } 
                    ?>

                  
    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
