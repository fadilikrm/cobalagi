<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Siswa</h3>
		</div>
		<div class="card-body">
			<a href="menu.php?page=frm_siswa" type="button" class="btn btn-primary" name="input">Input</a>
			<br>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIS</th>
						<th>NISN</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Telepon</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql=mysqli_query($connect_db,"select * from tbl_siswa");
						$nomor=1;
						while($data=mysqli_fetch_assoc($sql))
						{
					?>
					<tr>
						<td><?php echo $nomor++ ?></td>
						<td><?php echo $data['nis']?></td>
						<td><?php echo $data['nisn']?></td>
						<td><?php echo $data['nama']?></td>
						<td><?php echo $data['kode_kelas']?></td>
						<td><?php echo $data['telepon']?></td>
						<td>
							<a href="menu.php?page=frm_editsiswa&nis=<?php echo $data['nis']?>" type="button" class="btn btn-success" name="edit">Edit</a>
							<a href="proses_hapussiswa.php?nis=<?php echo $data['nis']?>" type="button" class="btn btn-danger" name="hapus">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>	
			
		</div>
	</div>
</div>	