<?php
	include "../koneksi.php";
	if(isset($_POST['rekam']))
	{
		$kode=$_POST['txtKode'];
		$judul=$_POST['txtJudul'];
		$isbn=$_POST['txtISBN'];
		$kategori=$_POST['cboKategori'];
		$penerbit=$_POST['cboPenerbit'];
		$pengarang=$_POST['txtPengarang'];
		$halaman=$_POST['txtHalaman'];
		$jumlah=$_POST['txtJumlah'];
		$tahun=$_POST['txtTahun'];
		$sinopsis=$_POST['txtSinopsis'];
		$file=$_POST['txtFile'];
	}
	$sql=mysqli_query($connect_db,"insert into tbl_buku
	      (kd_buku,judul,isbn,kd_kategori,kd_penerbit,pengarang,
		  halaman,jumlah,thn_terbit,sinopsis,gambar)
		  values('$kode','$judul','$isbn','$kategori','$penerbit','$pengarang',
		  '$halaman','$jumlah','$tahun','$sinopsis','$file')");
	if($sql)	  
		{
		echo '<script>
			  alert("Data anda kini telah terekam");
		      document.location="menu.php?page=frm_buku";
			  </script>';   
	}
?>