<?php
	include "../koneksi.php";
	if(isset($_POST['rekam']))
	{
		$kode=$_POST['txtKode'];
		$nama=$_POST['txtNama'];
		
	}
	$sql=mysqli_query($connect_db,"insert into tbl_kategori
	      (kd_kategori,nm_kategori)
		  values('$kode','$nama')");
	if($sql)	  
		{
		echo '<script>
			  alert("Data anda kini telah terekam");
		      document.location="menu.php?page=frm_kategori";
			  </script>';   
	}
?>