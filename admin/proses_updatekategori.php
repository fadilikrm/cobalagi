<?php
	include "../koneksi.php";
	if(isset($_POST['rekam']))
	{
		$kode=$_POST['txtKode'];
		$nama=$_POST['txtNama'];
		
	}
	$sql=mysqli_query($connect_db,"update tbl_kategori set 
						nm_kategori='$nama' where kd_kategori='$kode'");
	if($sql)	  
		{
		echo '<script>
			  alert("Data anda kini telah terupdate");
		      document.location="menu.php?page=frm_viewkategori";
			  </script>';   
	}
?>