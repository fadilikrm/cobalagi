<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Input Siswa</h3>
		</div>
		<div class="card-body">
			<form action="proses_rekamsiswa.php" method="POST">
				<div class="form-group">
					<label>NIS</label>
					<input type="text" name="txtNIS" class="form-control">
				</div>
				<div class="form-group">
					<label>NISN</label>
					<input type="text" name="txtNISN" class="form-control">
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="txtNama" class="form-control">
				</div>
				<div class="form-group">
					<label>Kelas</label>
					<select name="cboKelas" class="form-control">
						<option value="" selected>Pilih Kelas</option>
						<?php
							$sql=mysqli_query($connect_db,"select * from tbl_kelas");
							while($data=mysqli_fetch_assoc($sql))
								{
						?>
						<option value="<?php echo $data['kode_kelas'] ?>" ><?php echo $data['kode_kelas'] ?> | <?php echo $data['nm_kelas'] ?> </option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label>Telepon</label>
					<input type="text" name="txtTelepon" class="form-control">
				</div>	
				<div class="form-group">
					<button class="btn btn-success" name="rekam" type="submit">Rekam</button>
					<a href="menu.php?page=frm_viewsiswa" type="button" class="btn btn-primary" name="kembali">Kembali</a>
				</div>
			</form>
		</div>
	</div>
</div>	