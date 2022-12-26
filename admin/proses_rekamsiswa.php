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
	$sql=mysqli_query($connect_db,"insert into tbl_siswa
	      (nis,nisn,nama,kode_kelas,telepon)
		  values('$nis','$nisn','$nama','$kelas','$telepon')");
	if($sql)	  
		{
		echo '<script>
			  alert("Data anda kini telah terekam");
		      document.location="menu.php?page=frm_siswa";
			  </script>';   
	}
?>