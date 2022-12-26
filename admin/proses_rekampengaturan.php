<?php
	include "../koneksi.php";
    if(isset($_POST['rekam']))
	{
		$denda=$_POST['txtDenda'];	
	    $jumhari=$_POST['txtJumHari'] ;
		$jumbuku=$_POST['txtJumBuku'];
	}
    mysqli_query($connect_db,"delete from tbl_pengaturan");
	$sql=mysqli_query($connect_db,"call rekampengaturan
	    ('$denda','$jumhari','$jumbuku')");
	if($sql)
	{
		echo '<script>
			  alert("Data anda kini telah terekam");
		      document.location="menu.php?page=frm_pengaturan";
			  </script>';   
	}		
?>