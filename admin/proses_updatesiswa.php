<?php
	include "../koneksi.php";
	if(isset($_POST['rekam']))
	{
		$nis=$_POST['txtNIS'];
		$nisn=$_POST['txtNISN'];
		$nama=$_POST['txtNama'];
		$kelas=$_POST['cboKelas'];
		$telepon=$_POST['txtTelepon'];
		
	}
	$sql=mysqli_query($connect_db,"update tbl_siswa set 
	nisn='$nis',nama='$nama',kode_kelas='$kelas',telepon='$telepon' 
	where nis='$nis'");
	if($sql)	  
		{
		echo '<script>
			  alert("Data anda kin i telah terupdate");
		      document.location="menu.php?page=frm_viewsiswa";
			  </script>';   
	}
?>