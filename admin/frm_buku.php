<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Input Buku</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<form action="proses_rekambuku.php" method="POST">
						<div class="form-group">
							<label>Kode Buku</label>
							<input type="text" name="txtKode" class="form-control">
						</div>
						<div class="form-group">
							<label>Judul</label>
							<input type="text" name="txtJudul" class="form-control">
						</div>
						<div class="form-group">
							<label>ISBN</label>
							<input type="text" name="txtISBN" class="form-control">
						</div>
						<div class="form-group">
							<label>Kategori</label>
							<select name="cboKategori" class="form-control">
								<option value="" selected>Pilih kategori</option>
								<?php
									$sql=mysqli_query($connect_db,"select * from tbl_kategori");
									while($data=mysqli_fetch_assoc($sql))
										{
								?>
								<option value="<?php echo $data['kd_kategori'] ?>" ><?php echo $data['kd_kategori'] ?> | <?php echo $data['nm_kategori'] ?> </option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Penerbit</label>
							<select name="cboPenerbit" class="form-control">
								<option value="" selected>Pilih Penerbit</option>
								<?php
									$sql=mysqli_query($connect_db,"select * from tbl_penerbit");
									while($data=mysqli_fetch_assoc($sql))
										{
								?>
								<option value="<?php echo $data['kd_penerbit'] ?>" ><?php echo $data['kd_penerbit'] ?> | <?php echo $data['nm_penerbit'] ?> </option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Pengarang</label>
							<input type="text" name="txtPengarang" class="form-control">
						</div>	
						
					
				</div>
				<div class="col">
					<div class="form-group">
						<label>Halaman</label>
						<input type="number" name="txtHalaman" class="form-control">
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input type="number" name="txtJumlah" class="form-control">
					</div>
					<div class="form-group">
						<label>Tahun Terbit</label>
						<input type="number" name="txtTahun" class="form-control">
					</div>
					<div class="form-group">
						<label>Sinopsis</label>
						<textarea name="txtSinopsis" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>File Sampul Buku</label>
						<input type="file" name="txtFile">
					</div>		
					
					<div class="form-group">
						<button class="btn btn-success" name="rekam" type="submit">Rekam</button>
						<a href="menu.php?page=frm_viewbuku" type="button" class="btn btn-primary" name="kembali">Kembali</a>
					</div>
				</div>
				</form>
			</div>		
		</div>
	</div>
</div>	