<?php
	include "../koneksi.php";
	if(isset($_POST['rekam']))
	{
		$kode=$_POST['txtKode'];
		$nama=$_POST['txtNama'];
		
	}
	$sql=mysqli_query($connect_db,"update tbl_penerbit set 
						nm_penerbit='$nama' where kd_penerbit='$kode'");
	if($sql)	  
		{
		echo '<script>
			  alert("Data anda kini telah terupdate");
		      document.location="menu.php?page=frm_viewpenerbit";
			  </script>';   
	}
?>