<?php
	$kode=$_GET['kode'];
	$sql=mysqli_query($connect_db,"select * from tbl_buku where kd_buku='$kode'");
	$data=mysqli_fetch_assoc($sql);
	
?>
<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Edit Buku</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<form action="proses_updatebuku.php" method="POST">
						<div class="form-group">
							<label>Kode Buku</label>
							<input type="text" name="txtKode" class="form-control" value="<?php echo $data['kd_buku']?>" readonly>
						</div>
						<div class="form-group">
							<label>Judul</label>
							<input type="text" name="txtJudul" class="form-control" value="<?php echo $data['judul']?>">
						</div>
						<div class="form-group">
							<label>ISBN</label>
							<input type="text" name="txtISBN" class="form-control" value="<?php echo $data['isbn']?>">
						</div>
						<div class="form-group">
							<label>Kategori</label>
							<select name="cboKategori" class="form-control">
								<option value="<?php echo $data['kd_kategori']?>"><?php echo $data['kd_kategori']?></option>
								<?php
									$sql2=mysqli_query($connect_db,"select * from tbl_kategori");
									while($data2=mysqli_fetch_assoc($sql2))
										{
								?>
								<option value="<?php echo $data2['kd_kategori'] ?>" ><?php echo $data2['kd_kategori'] ?> | <?php echo $data2['nm_kategori'] ?> </option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Penerbit</label>
							<select name="cboPenerbit" class="form-control">
								<option value="<?php echo $data['kd_penerbit']?>"><?php echo $data['kd_penerbit']?></option>
								<?php
									$sql1=mysqli_query($connect_db,"select * from tbl_penerbit");
									while($data1=mysqli_fetch_assoc($sql1))
										{
								?>
								<option value="<?php echo $data1['kd_penerbit'] ?>" ><?php echo $data['kd_penerbit'] ?> | <?php echo $data1['nm_penerbit'] ?> </option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Pengarang</label>
							<input type="text" name="txtPengarang" class="form-control" value="<?php echo $data['pengarang']?>">
						</div>	
						
					
				</div>
				<div class="col">
					<div class="form-group">
						<label>Halaman</label>
						<input type="number" name="txtHalaman" class="form-control" value="<?php echo $data['halaman']?>">
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input type="number" name="txtJumlah" class="form-control" value="<?php echo $data['jumlah']?>">
					</div>
					<div class="form-group">
						<label>Tahun Terbit</label>
						<input type="number" name="txtTahun" class="form-control" value="<?php echo $data['thn_terbit']?>">
					</div>
					<div class="form-group">
						<label>Sinopsis</label>
						<textarea name="txtSinopsis" class="form-control"><?php echo $data['sinopsis']?></textarea>
					</div>
					
					<div class="form-group">
						<label>Gambar</label>
						<img src="sampul/<?php echo $data['gambar']?>" width="50%" height="20%">
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