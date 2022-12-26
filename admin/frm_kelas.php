<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Input Kelas</h3>
		</div>
		<div class="card-body">
			<form action="proses_rekamkelas.php" method="POST">
				<div class="form-group">
					<label>Kode Kelas</label>
					<input type="text" name="txtKode" class="form-control">
				</div>
				<div class="form-group">
					<label>Nama Kelas</label>
					<input type="text" name="txtNama" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-success" name="rekam" type="submit">Rekam</button>
					<a href="menu.php?page=frm_viewkelas" type="button" class="btn btn-primary" name="kembali">Kembali</a>
				</div>
			</form>
		</div>
	</div>
</div>	