<?php 
	include"koneksi.php";
	session_start();
	if (isset($_SESSION['admin'])) {
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	
	<link rel='stylesheet' type='text/css' href='editableinvoice/css/style.css' />
	<link rel='stylesheet' type='text/css' href='editableinvoice/css/print.css' media="print" />
	<script type='text/javascript' src='editableinvoice/js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='editableinvoice/js/example.js'></script>

</head>

<body>
	<?php 
		echo "<script>
		window.print();
		</script>";
	 ?>

	<div id="page-wrap">

		<textarea id="header">Kwitansi Perjalanan</textarea>
		
		<div id="identity">

			<img src="images/logo-kota-tangerang.png" width="100px">
            <div id="logo">

              <div id="logoctr">

              </div>

              <div id="logohelp">

              </div>

            </div>
		
		</div>
		<?php 
            }else{
                echo "<script>alert('Anda harus login terlebih dahulu untuk dapat mengakses halaman ini');
                window.location='../login.php';
                </script>";

            }
         ?>
		
		<div style="clear:both"></div>
		
		<div id="kwitansi">
			<?php 
				$kd_kwitansi=$_GET['kd_kwitansi'];
				$total=0;
				$sql="SELECT * FROM Kwitansi JOIN user ON Kwitansi.kd_user=user.kd_user 
											JOIN spt ON kwitansi.no_spt=spt.no_spt
											JOIN tujuan ON kwitansi.kd_tujuan=tujuan.kd_tujuan
											JOIN tempat ON kwitansi.kd_tempat=tempat.kd_tempat
											JOIN jabatan ON kwitansi.kd_jabatan=jabatan.kd_jabatan
											WHERE kd_kwitansi='$kd_kwitansi'";
				$query=mysqli_query($db,$sql);
				while($data=mysqli_fetch_array($query)) {
					$total=$total+($data['lamanya']*$data['uang_harian'])+$data['tarif_transport']+($data['tarif_tempat']*$data['lamanya']);
			 ?>

            <table id="meta">
            	<?php
                echo "<tr>
                    <td class='meta-head'>No</td>
                    <td align='left'>$data[kd_kwitansi]</td>
                </tr>";
                ?>
            </table>
		
		</div>
		
		<table id="items">
		<?php

		echo "<tr>
		      <th width='20%' align='left'>No. Surat Perintah Tugas </th>
		      <td width='40%''>$data[no_spt]</td>
		  </tr>
		  
		  <tr>
		      <th align='left'>Nama Pegawai / NIP </th>
		      <td>$data[nama_lengkap] / $data[nip]</td>
		  </tr>

		  <tr>
		  	<th align='left'>Jabatan</th>
		  	<td>$data[nama_jabatan]</td>
		  <tr>
		      <th align='left'>Selama</th>
		      <td>$data[lamanya] hari</td>
		  </tr>

		  <tr>
		      <th align='left'>Tanggal Berangkat</th>
		      <td>".date('d-m-Y',strtotime($data['tgl_berangkat']))."</td>
		  </tr>

		  <tr>
		      <th align='left'>Tanggal Kembali</th>
		      <td>".date('d-m-Y',strtotime($data['tgl_kembali']))."</td>
		  </tr>

		  <tr>
		      <th align='left'>Dalam Rangka</th>
		      <td>$data[dalam_rangka]</td>
		  </tr>

		  <tr>
		      <th align='left'>$data[nama_tujuan]</th>
		      <td>$data[tarif_transport]</td>
		  </tr>

		  <tr>
		      <th align='left'>Uang Harian</th>
		      <td>$data[uang_harian]</td>
		  </tr>

		  <tr>
		      <th align='left'>$data[nama_tempat]</th>
		      <td>$data[tarif_tempat]</td>
		  </tr>

		  <tr>
		      <th align='left'>Total</th>
		      <td>$total</td>
		  </tr>";
		  ?>
		
		</table>
		

		<table id="meta">
		        	<br>
        <?php
           echo "<tr>
                    <td class='meta-head'><center>".date('d-m-Y',strtotime($data['tgl_kwitansi']))."</center></td>
                </tr>
                <tr>
					<td><center><img src='images/scan.jpg' width='130px'></center></td>                	
                </tr>";
        ?>
        <?php 
        	}
        	$sql="SELECT * FROM user WHERE role='admin'";
        	$query=mysqli_query($db,$sql);
        	while ($cuk=mysqli_fetch_array($query)) {

            echo "<tr>
                    <td><center>Achmad Fathoni</center></td>
                </tr>";
            }
        ?>
            	</table>
	
	</div>
	
</body>

</html>