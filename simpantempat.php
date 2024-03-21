<?php 
include"koneksi.php";
if (isset($_POST['btnSave'])) {
 	
 	$nama_tempat		=$_POST['nama_tempat'];
 	$tarif_tempat		=$_POST['tarif_tempat'];

 	$query = mysqli_query($db, "insert into tempat (nama_tempat, tarif_tempat) values ('$nama_tempat','$tarif_tempat')");

 	if ($query) {
 		echo "<script>alert('data berhasil disimpan');
		document.location.href='tempat.php'</script>\n";
			} else {
		echo "<script>alert('data gagal disimpan');
		document.location.href='formtempat.php'</script>\n";
		}
	}
	mysqli_close(); 
 ?>