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
	$sql=mysqli_query($connect_db,"update tbl_buku set 
	judul='$judul',isbn='$isbn',kd_kategori='$kategori',
	kd_penerbit='$penerbit',pengarang='$pengarang',
	jumlah='$jumlah',thn_terbit='$tahun',
	sinopsis='$sinopsis',gambar='$file'	
	where kd_buku='$kode'");
	if($sql)	  
		{
		echo '<script>
			  alert("Data anda kini telah terupdate");
		      document.location="menu.php?page=frm_viewbuku";
			  </script>';   
	}
?>