 <?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A3');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(400,7,'LAPORAN REKAP BIAYA PERJALANAN DINAS',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(400,7,'KECAMATAN BATUCEPER',0,1,'C');
 

$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(7,10,'NO',1,0);
$pdf->Cell(38,10,'NAMA',1,0);
$pdf->Cell(10,10,'GOL',1,0);
$pdf->Cell(58,10,'JABATAN',1,0);
$pdf->Cell(16,10,'NO. SPT',1,0);
$pdf->Cell(20,10,'LAMANYA',1,0);
$pdf->Cell(25,10,'BERANGKAT',1,0);
$pdf->Cell(20,10,'KEMBALI',1,0);
$pdf->Cell(45,10,'DALAM RANGKA',1,0);
$pdf->Cell(28,10,'TUJUAN',1,0);
$pdf->Cell(40,10,'TEMPAT',1,0);
$pdf->Cell(28,10,'TRANSPORT',1,0);
$pdf->Cell(28,10,'UANG HARIAN',1,0);
$pdf->Cell(28,10,'TARIF TEMPAT',1,0);
$pdf->Cell(24,10,'TOTAL',1,1);
 
$pdf->SetFont('Arial','',10);
 
include 'koneksi.php';
if (isset($_POST['ok'])) {
  $no=1;
  $tgl_dari=date("Y/m/d",strtotime($_POST['tgl_dari']));
  $tgl_sampai=date("Y/m/d",strtotime($_POST['tgl_sampai']));
  $sql  ="SELECT * FROM kwitansi JOIN user ON kwitansi.kd_user=user.kd_user
                                 JOIN tempat ON kwitansi.kd_tempat=tempat.kd_tempat
                                 JOIN jabatan ON kwitansi.kd_jabatan=jabatan.kd_jabatan
                                 JOIN spt ON kwitansi.no_spt=spt.no_spt 
                                 JOIN tujuan ON kwitansi.kd_tujuan=tujuan.kd_tujuan
                                 WHERE date(tgl_kwitansi) BETWEEN '$_POST[tgl_dari]' AND '$_POST[tgl_sampai]'";
  
  $query  =mysqli_query($db,$sql);
  $total=0;
  $totall=0;
  while ($data=mysqli_fetch_array($query)) {
    $pdf->Cell(7,10,$no,1,0);
    $pdf->Cell(38,10,$data['nama_lengkap'],1,0);
    $pdf->Cell(10,10,$data['golongan'],1,0);
    $pdf->Cell(58,10,$data['nama_jabatan'],1,0);
    $pdf->Cell(16,10,$data['no_spt'],1,0);
    $pdf->Cell(20,10,$data['lamanya'],1,0);
    $pdf->Cell(25,10,$data['tgl_berangkat'],1,0);
    $pdf->Cell(20,10,$data['tgl_kembali'],1,0);
    $pdf->Cell(45,10,$data['dalam_rangka'],1,0);
    $pdf->Cell(28,10,$data['nama_tujuan'],1,0);
    $pdf->Cell(40,10,$data['nama_tempat'],1,0);
    $pdf->Cell(28,10,number_format($data['tarif_transport']),1,0);
    $pdf->Cell(28,10,number_format($data['uang_harian']),1,0);
    $pdf->Cell(28,10,number_format($data['tarif_tempat']),1,0);
    $total=($data['lamanya']*$data['uang_harian'])+$data['tarif_transport']+($data['tarif_tempat']*$data['lamanya']);
    $pdf->Cell(24,10,number_format($total),1,1);
    $no=$no+1;
    $totall+=$total;
  } 
  $pdf->Cell(20,6,'',0,0);
  $pdf->Cell(35,6,'TOTAL BIAYA',0,0);
  $pdf->Cell(20,6,'',0,0);
  $pdf->Cell(52,6,'=',0,0);
  $pdf->Cell(6,6,'RP.',0,0);
  $pdf->Cell(25,6,number_format($totall),0,1);
}
$pdf->Output();
?>