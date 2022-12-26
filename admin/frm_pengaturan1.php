<?php
$sql=mysqli_query($connect_db,"select * from tbl_pengaturan");
$data=mysqli_fetch_assoc($sql);	
?>
<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Pengaturan Perpustakaan</h3>
		</div>
		<div class="card-body">
			<form action="proses_rekampengaturan.php" method="POST">
				<div class="form-group">
					<label>Denda</label>
					<input type="text" class="form-control" name="txtDenda" value="<?php echo $data['denda']?>">
				</div>
				<div class="form-group">
					<label>Max Jumlah Hari Peminjaman</label>
					<input type="text" class="form-control" name="txtJumHari" value="<?php echo $data['max_pinjambuku']?>">
				</div>
				<div class="form-group">
					<label>Max Jumlah Buku Yang Pinjam</label>
					<input type="text" class="form-control" name="txtJumBuku" value="<?php echo $data['max_jumbuku']?>">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="rekam">Rekam</button>
				</div>
			</form>	
		</div>
	</div>
</div>