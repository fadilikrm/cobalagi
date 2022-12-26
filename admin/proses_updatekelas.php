<?php
	include "../koneksi.php";
	if(isset($_POST['rekam']))
	{
		$kode=$_POST['txtKode'];
		$nama=$_POST['txtNama'];
		
	}
	$sql=mysqli_query($connect_db,"update tbl_kelas set 
						nm_kelas='$nama' where kode_kelas='$kode'");
	if($sql)	  
		{
		echo '<script>
			  alert("Data anda kini telah terupdate");
		      document.location="menu.php?page=frm_viewkelas";
			  </script>';   
	}
?>