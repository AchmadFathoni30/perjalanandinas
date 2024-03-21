<?php 
include"koneksi.php";
if (isset($_POST['btnSave'])) {
 	
 	$nama_dasar		=$_POST['nama_dasar'];
 	$tgl_dasar		=$_POST['tgl_dasar'];
 	$no_dasar		=$_POST['no_dasar'];
 	$peruntukan		=$_POST['peruntukan'];

 	$query = mysqli_query($db,"insert into dasar (nama_dasar, tgl_dasar, no_dasar, peruntukan) values ('$nama_dasar','$tgl_dasar','$no_dasar','$peruntukan')");

 	if ($query) {
 		echo "<script>alert('data berhasil disimpan');
		document.location.href='tdasar.php'</script>\n";
			} else {
		echo "<script>alert('data gagal disimpan');
		document.location.href='formdasar.php'</script>\n";
		}
 	}

 	mysqli_close();
  ?>