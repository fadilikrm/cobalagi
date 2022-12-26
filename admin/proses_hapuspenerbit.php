<?php
	include "../koneksi.php";
	$kode=$_GET['kode'];
	$sql=mysqli_query($connect_db,"delete from tbl_penerbit 
	         where kd_penerbit='$kode'");
	if($sql)	  
		{
		echo '<script>
			  alert("Data anda kini telah terhapus");
		      document.location="menu.php?page=frm_viewpenerbit";
			  </script>';   
	}
?>