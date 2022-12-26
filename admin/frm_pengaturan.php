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
					<input type="text" name="txtDenda" class="form-control">
				</div>
				<div class="form-group">
					<label>Maximal Jumlah Hari Peminjaman</label>
					<input type="text" name="txtJumHari" class="form-control">
				</div>
				<div class="form-group">
					<label>Maximal Jumlah Buku Yang Dipinjam</label>
					<input type="text" name="txtJumBuku" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-success" name="rekam" type="submit">Rekam</button>
				</div>
			</form>	
		</div>
	</div>
</div>	