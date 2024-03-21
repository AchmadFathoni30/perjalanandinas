<?php 	
include"koneksi.php";
?>
<?php
if (isset($_POST['btnSave'])) {
	// $no_spt			="111";
	$kd_dasar		=$_POST['kd_dasar'];
	$kd_user		=$_POST['kd_user'];
	$kd_jabatan		=$_POST['kd_jabatan'];
	$dalam_rangka	=$_POST['dalam_rangka'];
	$kd_tujuan		=$_POST['kd_tujuan'];
	$kd_tempat		=$_POST['kd_tempat'];
	$lamanya		=$_POST['lamanya'];
	$tgl_berangkat	=$_POST['tgl_berangkat'];
	$tgl_kembali	=$_POST['tgl_kembali'];
	$tempat_keluar	=$_POST['tempat_keluar'];
	$tgl_keluar		=$_POST['tgl_keluar'];
	$status			=$_POST['status'];
}
$sql="INSERT INTO spt ( kd_dasar, kd_user, kd_jabatan, dalam_rangka, kd_tujuan, kd_tempat, lamanya, tgl_berangkat,tgl_kembali, tempat_keluar, tgl_keluar, status)
	  VALUES ('$kd_dasar','$kd_user','$kd_jabatan','$dalam_rangka','$kd_tujuan','$kd_tempat','$lamanya','$tgl_berangkat','$tgl_kembali','$tempat_keluar','$tgl_keluar','$status')";


	$query=mysqli_query($db,$sql);
$sql3=mysqli_query($db,"select * from spt order by no_spt desc limit 1 ");
$dataspt=mysqli_fetch_assoc($sql3);

$sql1="INSERT INTO kwitansi (no_spt, kd_user, kd_jabatan, kd_tujuan, kd_tempat, tgl_kwitansi)
	  VALUES ('$dataspt[no_spt]','$kd_user','$kd_jabatan','$kd_tujuan','$kd_tempat','$tgl_keluar')";
	
	$queryy=mysqli_query($db,$sql1);

	if(! $query )
	{
  	die('Gagal Tambah Data: ' . mysqli_error($db));
	}
	else
	{ ?>
		<script>
         alert("Data Berhasil Ditambahkan");
         window.location = "http://localhost/perjalanandinas/tspt.php";
   
        </script>

<?php }
if(! $queryy )
	{
  	die('Gagal Tambah Data: ' . mysqli_error($db));
	}
	else
	{ ?>
		<script>
         alert("Data Berhasil Ditambahkan");
         window.location = "http://localhost/perjalanandinas/tspt.php";
   
        </script>

<?php }
	
	die();
	echo "Berhasil tambah data\n";
	mysqli_close($db);
 ?>