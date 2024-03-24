<?php
    include('../assets/fpdf185/fpdf.php');
    include('../koneksi.php');
    $pdf = new fpdf('L','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B','23');
    $pdf->Cell(280,10,'LAPORAN SISTEM INFORMASI LAUNDRY',0,0,"C");
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B','9');
    
    $tgl_dari = $_GET['dari'];
    $tgl_sampai = $_GET['sampai'];
    
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B','9');
    
    $pdf->Cell(35,6,'Dari Tanggal',0,0);
    $pdf->Cell(5,6,'',0,0);
    $pdf->Cell(35,6,date('d-m-y', strtotime($tgl_dari)),0,0);
    $pdf->Cell(10,6,'',0,1);
    $pdf->Cell(35,6,'Sampai Tanggal',0,0);
    $pdf->Cell(5,6,'',0,0);
    $pdf->Cell(35,6,date('d-m-y', strtotime($tgl_sampai)),0,0);
    $pdf->Cell(10,6,'',0,1);
    
    $pdf->Cell(10,15,'',0,1);
    $pdf->SetFont('Arial','B','9');
    
    $pdf->Cell(14,7,'NO',1,0,'C');
    $pdf->Cell(35,7,'INVOICE',1,0,'C');
    $pdf->Cell(35,7,'Tanggal',1,0,'C');
    $pdf->Cell(35,7,'Pelanggan',1,0,'C');
    $pdf->Cell(35,7,'Berat (kg)',1,0,'C');
    $pdf->Cell(35,7,'Tanggal Selesai',1,0,'C');
    $pdf->Cell(35,7,'Harga',1,0,'C');
    $pdf->Cell(35,7,'Status',1,1,'C');
    
    $pdf->SetFont('Arial','','9');
    
    $no = 1;
    $data = mysqli_query($koneksi,"select * from pelanggan,transaksi where transaksi_pelanggan=pelanggan_id and date(transaksi_tgl) > '$tgl_dari' and date(transaksi_tgl) <'$tgl_sampai' order by transaksi_id desc");
    while($d = mysqli_fetch_array($data)) {
        $pdf->Cell(14,6,$no++,1,0,'C');
        $pdf->Cell(35,6,'Invoice ' . $d['transaksi_id'],1,0,'C');
        $pdf->Cell(35,6,$d['transaksi_tgl'],1,0,'C');
        $pdf->Cell(35,6,$d['pelanggan_nama'],1,0,'C');
        $pdf->Cell(35,6,$d['transaksi_berat'],1,0,'C');
        $pdf->Cell(35,6,$d['transaksi_tgl_selesai'],1,0,'C');
        $pdf->Cell(35,6,'Rp.' .  number_format($d['transaksi_harga']),1,0,'C');
    
        if($d['transaksi_status']=="0"){
            $s = "PROSES";
        } else if($d['transaksi_status']=="1"){
            $s = "DICUCI";
        } else if($d['transaksi_status']=="2"){
            $s = "SELESAI";
        }
        $pdf->Cell(35,6,$s,1,1,'C');
    }
    
    $pdf->Output();
    exit;
    
?>