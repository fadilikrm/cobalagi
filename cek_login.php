<?php
include 'koneksi.php';
if (isset($_POST['kirim'])){
	$namauser=$_POST['txtusername'];
	$passuser=md5($_POST['txtpassword']);
	$query=mysqli_query($connect_db,"SELECT * FROM tbl_user 
	WHERE username='$namauser' and password='$passuser' ");
	
	session_start();
	$_SESSION['namauserlogin']= $namauser;
	
	
	$baris=mysqli_fetch_assoc($query);
	$_SESSION['roleuser']= $baris['role'];
	$_SESSION['namauser']= $baris['nm_user'];
	
	$jumrecord=mysqli_num_rows($query);
	if ($jumrecord > 0){		
		if ($_SESSION['roleuser']=="Administrator"){
			header("Location: admin/menu.php?page=dashboard_admin");			
		}elseif ($_SESSION['roleuser']=="Petugas"){		
		    header("Location: petugas/menu.php?page=dashboard_petugas");			
		}		
	}else{
		echo "<script>
		alert('Maaf anda gagal login')
		</script>";		
		header("Location: index.php");
	}
}
?>