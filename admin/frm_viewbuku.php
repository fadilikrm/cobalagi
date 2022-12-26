<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Buku</h3>
		</div>
		<div class="card-body">
			<a href="menu.php?page=frm_buku" type="button" class="btn btn-primary" name="input">Input</a>
			<br>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Kode</th>
						<th>Judul</th>
						<th>Kategori</th>
						<th>Penerbit</th>
						<th>Jumlah</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql=mysqli_query($connect_db,"select * from tbl_buku");
						$nomor=1;
						while($data=mysqli_fetch_assoc($sql))
						{
					?>
					<tr>
						<td><?php echo $nomor++ ?></td>
						<td><?php echo $data['kd_buku']?></td>
						<td><?php echo $data['judul']?></td>
						<td><?php echo $data['kd_kategori']?></td>
						<td><?php echo $data['kd_penerbit']?></td>
						<td><?php echo $data['jumlah']?></td>
						<td>
							<a href="menu.php?page=frm_editbuku&kode=<?php echo $data['kd_buku']?>" type="button" class="btn btn-success" name="edit">Edit</a>
							<a href="proses_hapusbuku.php?kode=<?php echo $data['kd_buku']?>" type="button" class="btn btn-danger" name="hapus">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>	
			
		</div>
	</div>
</div>	