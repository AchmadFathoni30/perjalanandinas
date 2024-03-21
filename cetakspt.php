<?php include"koneksi.php"; 
?>
<html>
<head>
</head>

<body onload="window.print();">
	<img align="left" src="images/logo-kota-tangerang.png" width="12%">
	<p align="center">
		<b>
			<font size="6" color="black">PEMERINTAHAN KOTA TANGERANG
			</b><br></font>

			<b><font size="8" color="black">KECAMATAN BATUCEPER
			</b><br></font>

			<b><font size="5" color="black">Jl. Daan Mogot No. 183 Kota Tangerang
			</b></font>
			<hr>

            <?php 
            $no_spt = $_GET['no_spt'];
            $sql="SELECT * FROM spt JOIN user ON spt.kd_user=user.kd_user 
                                    JOIN dasar ON spt.kd_dasar=dasar.kd_dasar
                                    JOIN tujuan ON spt.kd_tujuan=tujuan.kd_tujuan
                                    JOIN tempat ON spt.kd_tempat=tempat.kd_tempat
                                    JOIN jabatan ON spt.kd_jabatan=jabatan.kd_jabatan WHERE no_spt=$no_spt";
            $query = mysqli_query($db,$sql);
            while ($data=mysqli_fetch_array($query)){ 
            ?>

            <font size="5" color="black"><p align="center"><u><b>SURAT PERINTAH TUGAS
            </b></u></font><br>
            <font size="5" color="black">Nomor : 800/<?php echo "$data[no_spt]"; ?>-Sekt/2018
            </p></font>
                
            <font size="5" color="black"><p align="left">Dasar : <?php echo "$data[nama_dasar]"; ?>,</font>
            <font size="5" color="black">tanggal <?php echo "".date('d-m-Y',strtotime($data['tgl_dasar'])).""; ?></font>
            <font size="5" color="black">Nomor : <?php echo "$data[no_dasar]"; ?></font>
            <font size="5" color="black"><?php echo "$data[peruntukan]"; ?> :</p></font>    
                <br>

            <table>
                <tr>
                    <td><font size="5" color="black">Nama </font></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black">H. Nurhidayatullah</td></font>
                    <br>
                </tr>
                <tr>
                    <td><font size="5" color="black">Jabatan </td></font>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black">Camat Batuceper</td></font>
                </tr>
            </table>

                <b><font size="5" color="black"><p align="center">MEMERINTAHKAN :</p></font></b>
                <font size="5" color="black">Kepada</font>

            <table>
                <tr>
                    <td><font size="5" color="black">Nama / NIP</font></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black"><?php echo "$data[nama_lengkap]"; ?>/<?php echo "$data[nip]"; ?></font></td>
                </tr>

                <tr>
                    <td><font size="5" color="black">Golongan</font></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black"><?php echo "$data[golongan]"; ?></font></td>
                </tr>

                <tr>
                    <td><font size="5" color="black">Jabatan</font></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black"><?php echo "$data[nama_jabatan]"; ?></font></td>
                </tr>

                <tr>
                    <td><font size="5" color="black">Dalam Rangka</font></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black"><?php echo "$data[dalam_rangka]"; ?></font></td>
                </tr>

                <tr>
                    <td><font size="5" color="black">Tujuan</font></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black"><?php echo "$data[nama_tujuan]"; ?></font></td>
                </tr>

                <tr>
                    <td><font size="5" color="black">Bertempat</font></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black"><?php echo "$data[nama_tempat]"; ?></font></td>
                </tr>

                <tr>
                    <td><font size="5" color="black">Selama</font></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black"><?php echo "$data[lamanya]"; ?> hari</font></td>
                </tr>

                <tr>
                    <td><font size="5" color="black">Tanggal Berangkat</font></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black"><?php echo "".date('d-m-Y',strtotime($data['tgl_berangkat'])).""; ?></font></td>
                </tr>

                <tr>
                    <td><font size="5" color="black">Tanggal Kembali</font></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black"><?php echo "".date('d-m-Y',strtotime($data['tgl_kembali'])).""; ?></font></td>
                </tr>
                <br><br>
            </table>
                    
                    <pre>
                    	<font size="5" color="black">Demikian, surat perintah tugas ini dibuat untuk dilaksanakan sebaik - baiknya <br>dengan penuh tanggung jawab.
                        </font>
                    </pre>
                        
                    <div>
                        <div style="float:right">
                            <font size="5" color="black">Dikeluarkan di : <?php echo "$data[tempat_keluar]"; ?></font> 
                                <br><font size="5" color="black">Pada Tanggal <td>:</td><?php echo "$data[tgl_keluar]"; ?></font>
                                <br><b><font size="5" color="black">CAMAT BATUCEPER</font></b>

                            <div style="padding-top: 20px;">
                                <img src="images/scan.jpg" width="50%">
                                <br><b><u><font size="5" color="black">H. NURHIDAYATULLAH</font></b></u>
                                <br><font size="5" color="black">NIP. 83679988 09 9005</font>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                
    </body>
</html>