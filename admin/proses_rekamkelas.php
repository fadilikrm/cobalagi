<?php
	include "../koneksi.php";
	if(isset($_POST['rekam']))
	{
		$kode=$_POST['txtKode'];
		$nama=$_POST['txtNama'];
		
	}
	$sql=mysqli_query($connect_db,"insert into tbl_kelas
	      (kode_kelas,nm_kelas)
		  values('$kode','$nama')");
	if($sql)	  
		{
		echo '<script>
			  alert("Data anda kini telah terekam");
		      document.location="menu.php?page=frm_kelas";
			  </script>';   
	}
?>