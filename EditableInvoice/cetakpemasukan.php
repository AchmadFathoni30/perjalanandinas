<?php 
	include"koneksi.php";
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

		<textarea id="header">TANDA TERIMA</textarea>
		
		<div id="identity">

			<img src="editableinvoice/img/slides/derio.png" width="100px">
            <div id="logo">

              <div id="logoctr">

              </div>

              <div id="logohelp">

              </div>

            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">
			<?php 
				$id_pemasukan=$_GET['id_pemasukan'];
				$sql="SELECT * FROM tanda_terima JOIN user ON tanda_terima.user_id=user.user_id WHERE id_pemasukan='$id_pemasukan'";
				$query=mysqli_query($db,$sql);
				while ($cuk=mysqli_fecth_array($query)) {
			 ?>

            <table id="meta">
            	<?php
                echo "<tr>
                    <td class='meta-head'>No</td>
                    <td align='left'>$cuk[id_pemasukan]</td>
                </tr>";
                ?>
            </table>
		
		</div>
		
		<table id="items">
		<?php

		echo "<tr>
		      <th width='20%' align='left'>Telah diterima dari</th>
		      <td width='40%''>$cuk[nama]</td>
		  </tr>
		  <tr>
		      <th align='left'>Untuk Akad</th>
		      <td>$cuk[akad]</td>
		  </tr>
		  <tr>
		      <th align='left'>uang sebesar</th>
		      <td>$cuk[jumlah]</td>
		  </tr>
		  <tr>
		  	<th align='left'>Barang berupa</th>
		  	<td>-</td>
		  </tr>";
		  ?>
		
		</table>
		

		<table id="meta">
		        	<br>
        <?php
           echo "<tr>
                    <td class='meta-head'>$cuk[tgl_transfer]</td>
                </tr>
                <tr>
					<td align='left'></td>                	
                </tr>
                <tr>
                    <td align='left'>$cuk[nama]</td>
                </tr>";
         	}
        ?>
            	</table>
	
	</div>
	
</body>

</html>