<?php
	include "../koneksi.php";
	$nis=$_GET['nis'];
	$sql=mysqli_query($connect_db,"delete from tbl_siswa 
	         where nis='$nis'");
	if($sql)	  
		{
		echo '<script>
			  alert("Data anda kini telah terhapus");
		      document.location="menu.php?page=frm_viewsiswa";
			  </script>';   
	}
?>