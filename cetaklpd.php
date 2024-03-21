<?php include"koneksi.php"; ?>
<html>
<head>
</head>

<body onload="window.print();">
	<img align="left" src="images/logo-kota-tangerang.png" width="14%">
	<p align="center">
		<b>
			<font size="5" color="black">PEMERINTAHAN KOTA TANGERANG
			</b><br></font>

			<b><font size="6" color="black">KECAMATAN BATUCEPER
			</b><br></font>

			<b><font size="5" color="black">Jl. Daan Mogot No. 183 Kota Tangerang
			</b></font>
			<hr>

            <?php 
            $no_spt = $_GET['no_spt'];
            $sql="SELECT * FROM spt JOIN dasar ON spt.kd_dasar=dasar.kd_dasar 
                                    JOIN user ON spt.kd_user=user.kd_user 
                                    JOIN jabatan ON spt.kd_jabatan=jabatan.kd_jabatan
                                    WHERE no_spt=$no_spt";
            $query = mysqli_query($db,$sql);
            while ($data=mysqli_fetch_array($query)){ 
            ?>

            <font size="5" color="black"><p align="center"><u><b>LAPORAN PELAKSANAAN TUGAS
            </b></u></font><br></p>

            <table>
            <font size="5" color="black">Dengan ini kami laporkan hasil laporan perjalanan dinas kami sebagai berikut :</font><br><br>
                <tr>
                    <td><font size="5" color="black">Dasar Penugasan</font></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black"><?php echo "$data[nama_dasar]"; ?></font></td>
                </tr>
                <tr>
                    <td><font size="5" color="black">Nama / NIP</font></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black"><?php echo "$data[nama_lengkap]"; ?> / <?php echo "$data[nip]"; ?></font></td>
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
                    <td><font size="5" color="black">Hasil Perjalanan</font></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>:</td>
                    <td><font size="5" color="black"><?php echo "$data[hasil_perjalanan]"; ?></font></td>
                </tr>
            </table>
            <br>
            <br>
                    
                    <div>
                        <div style="float:right">
                                <font size="5" color="black"><?php echo "$data[tempat_laporan]" ?>,<?php echo "".date('d-m-Y',strtotime($data['tgl_laporan'])).""; ?></font>
                                <br><font size="5" color="black">Yang Melaksanakan Tugas</font>

                            <div style="padding-top: 75px;">
                                <br><font size="5" color="black"><?php echo "$data[nama_lengkap]"; ?></font>
                                <br><font size="5" color="black"><?php echo "$data[nip]"; ?></font>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                
    </body>
</html>