<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Manajemen User</h3>
		</div>
		<div class="card-body">
			<form action="proses_rekammanajemenuser.php" method="POST">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="txtNama">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="txtUserName">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="text" class="form-control" name="txtPassword">
				</div>
				<div class="form-group">
					<label>Role</label>
					<select name="cboRole" class="form-control">
						<option value="" selected>Pilih Role user</option>
						<option value="Administrator">Administrator</option>
						<option value="Petugas">Petugas</option>
					</select>
				</div>	
				<div class="form-group">
					<label>Status</label>
					<select name="cboStatus" class="form-control">
						<option value="" selected>Pilih Status user</option>
						<option value="1">Aktif</option>
						<option value="0">Tidak Aktif</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="rekam">Rekam</button>
					<a href="menu.php?page=frm_viewmanajemenuser" type="button" 
							name="kembali" class="btn btn-success">Kembali</a>
				</div>
			</form>	
		</div>
	</div>
</div>