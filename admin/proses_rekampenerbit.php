<?php
	include "../koneksi.php";
	if(isset($_POST['rekam']))
	{
		$nama=$_POST['txtNama'];
		
	}
	$sql=mysqli_query($connect_db,"insert into tbl_penerbit
	      (nm_penerbit)values('$nama')");
	if($sql)	  
		{
		echo '<script>
			  alert("Data anda kini telah terekam");
		      document.location="menu.php?page=frm_penerbit";
			  </script>';   
	}
?>