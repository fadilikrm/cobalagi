<?php
	include   "../koneksi.php";
	$kode=$_GET['kode'];
	$sql=mysqli_query($connect_db,"select * from tbl_penerbit where
	                  kd_penerbit='$kode'");
	$data=mysqli_fetch_assoc($sql);				  
?>
<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Edit penerbit</h3>
		</div>
		<div class="card-body">
			<form action="proses_updatepenerbit.php" method="POST">
				<div class="form-group">
					<label>Kode penerbit</label>
					<input type="text" name="txtKode" class="form-control" value="<?php echo $data['kd_penerbit']?>" readonly>
				</div>
				<div class="form-group">
					<label>Nama penerbit</label>
					<input type="text" name="txtNama" class="form-control" value="<?php echo $data['nm_penerbit']?>">
				</div>
				<div class="form-group">
					<button class="btn btn-success" name="rekam" type="submit">Rekam</button>
					<a href="menu.php?page=frm_viewpenerbit" type="button" class="btn btn-primary" name="kembali">Kembali</a>
				</div>
			</form>
		</div>
	</div>
</div>	