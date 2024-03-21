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
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
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
                        <?php echo"<a href='tlpdpegawai.php?nama_lengkap=$data[nama_lengkap]'><i class='menu-icon fa fa-edit'></i>Laporan Perjalanan Dinas</a>";}
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
                    
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Table Kwitansi Perjalanan</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th>No</th>
                        <th>No. SPT</th>
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>Tujuan</th>
                        <th>Tgl Berangkat</th>
                        <th>Tgl Kembali</th>
                        <th>Dalam Rangka</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                        <?php
                            $user=$_GET['nama_lengkap'];
                            $no=1;
                             $sql="SELECT * FROM kwitansi JOIN user ON kwitansi.kd_user=user.kd_user                         JOIN spt ON kwitansi.no_spt=spt.no_spt
                                                          JOIN tujuan ON kwitansi.kd_tujuan=tujuan.kd_tujuan
                                                          JOIN jabatan ON kwitansi.kd_jabatan=jabatan.kd_jabatan
                                                          WHERE nama_lengkap='$user'";
                            $query=mysqli_query($db,$sql);

                            while ($data=mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo "<td>".$no."</td>";
                                echo "<td>".$data['no_spt']."</td>";
                                echo "<td>".$data['nama_lengkap']."</td>";
                                echo "<td>".$data['nama_jabatan']."</td>";
                                echo "<td>".$data['nama_tujuan']."</td>";
                                echo "<td>".$data['tgl_berangkat']."</td>";
                                echo "<td>".$data['tgl_kembali']."</td>";
                                echo "<td>".$data['dalam_rangka']."</td>";
                                echo "<td><a href='cetakkwitansi.php?kd_kwitansi=$data[kd_kwitansi]' target='_blank' type='button' class='btn btn-default' style='color:white;background-color:green;padding:4px'><span class='fa fa-print glyphicon-print'></span>Cetak</a></td>";
                                echo "</tr>";
                                $no=$no+1;
                                  }
                                  ?>
                    </tbody>
                  </table>
                 
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
