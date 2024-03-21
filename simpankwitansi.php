<?php 	
include"koneksi.php";
?>
<?php
if (isset($_POST['btnSave'])) {
	$kd_kwitansi	=$_POST['kd_kwitansi'];
	$no_spt			=$_POST['no_spt'];
	$kd_user		=$_POST['kd_user'];
	$kd_jabatan		=$_POST['kd_jabatan'];
	$kd_tujuan		=$_POST['kd_tujuan'];
	$kd_tempat		=$_POST['kd_tempat'];
	$tgl_kwitansi	=$_POST['tgl_kwitansi'];
}
$sql="INSERT INTO kwitansi (kd_kwitansi, no_spt, kd_user, kd_jabatan, kd_tujuan, kd_tempat, tgl_kwitansi)
	  VALUES ('$kd_kwitansi','$no_spt','$kd_user','$kd_jabatan','$kd_tujuan','$kd_tempat','$tgl_kwitansi')";

	$query=mysqli_query($db,$sql);

	if(! $query )
	{
  	die('Gagal Tambah Data: ' . mysqli_error($db));
	}
	else
	{ ?>
		<script>
         alert("Data Berhasil Ditambahkan");
         window.location = "http://localhost/perjalanandinas/tkwitansi.php";
   
        </script>

<?php }
	
	die();
	echo "Berhasil tambah data\n";
	mysqli_close($db);
 ?>