<?php
	include "../koneksi.php";
    if(isset($_POST['rekam']))
	{
		$nama=$_POST['txtNama'];	
	    $username=$_POST['txtUserName'] ;
		$password=md5($_POST['txtPassword']);
		$role=$_POST['cboRole'];
		$status=$_POST['cboStatus'];
	}
    
	$sql=mysqli_query($connect_db,"INSERT INTO tbl_user (nm_user,username,password,role,aktif)VALUES
	    ('$nama','$username','$password','$role','$status')");
	if($sql)
	{
		echo '<script>
			  alert("Data anda kini telah terekam");
		      document.location="menu.php?page=frm_manajemenuser";
			  </script>';   
	}		
?>