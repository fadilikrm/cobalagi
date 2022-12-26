<?php
	include "../koneksi.php";
    if(isset($_POST['rekam']))
	{
		$iduser=$_POST['txtIDUser'];
		$nama=$_POST['txtNama'];	
	    $username=$_POST['txtUserName'] ;
		$password=md5($_POST['txtPassword']) ;
		$role=$_POST['cboRole'] ;
		$status=$_POST['cboStatus'] ;
		
	}
    
	if (empty($password))
	{
		$sql=mysqli_query($connect_db,"update tbl_user 
					set nm_user='$nama',username='$username',role='$role',aktif='$status' 
					where id_user='$iduser'");
	}else{
		$sql=mysqli_query($connect_db,"update tbl_user 
					set nm_user='$nama',username='$username',password='$password',role='$role',aktif='$status' 
					where id_user='$iduser'");
	}					
	if($sql)
	{
		echo '<script>
			  alert("Data anda kini telah terupdate");
		      document.location="menu.php?page=frm_viewmanajemenuser";
			  </script>';   
	}		
?>