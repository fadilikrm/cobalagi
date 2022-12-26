<?php
	include "../koneksi.php";
    $iduser=$_GET['iduser'];	
	
	$sql=mysqli_query($connect_db,"delete from tbl_user 
	    where id_user='$iduser' ");
	if($sql)
	{
		echo '<script>
			  alert("Data anda kini telah terhapus");
		      document.location="menu.php?page=frm_viewmanajemenuser";
			  </script>';   
	}	
?>