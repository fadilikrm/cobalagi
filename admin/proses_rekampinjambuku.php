<?php
	include "../koneksi.php";
	$query = "SELECT max(kode_pinjam) as maxKode 
	          FROM tbl_peminjaman_detail";
	$hasil = mysqli_query($connect_db,$query);
	$data = mysqli_fetch_array($hasil);
	$kodePinjam = $data['maxKode'];
	$noUrut = (int) substr($kodePinjam, 3, 3);
	$noUrut++;
	$char = "PJM";
	$kodePinjam = $char . sprintf("%03s", $noUrut);
	
	$nis=$_POST['cboNIS'];
	$tgl=$_POST['txtTgl'];
	$id=$_POST['id'];
	
?>