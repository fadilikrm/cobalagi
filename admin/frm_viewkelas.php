<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Kelas</h3>
		</div>
		<div class="card-body">
			<a href="menu.php?page=frm_kelas" type="button" class="btn btn-primary" name="input">Input</a>
			<br>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Kode Kelas</th>
						<th>Nama Kelas</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql=mysqli_query($connect_db,"select * from tbl_kelas");
						$nomor=1;
						while($data=mysqli_fetch_assoc($sql))
						{
					?>
					<tr>
						<td><?php echo $nomor++ ?></td>
						<td><?php echo $data['kode_kelas']?></td>
						<td><?php echo $data['nm_kelas']?></td>
						<td>
							<a href="menu.php?page=frm_editkelas&kode=<?php echo $data['kode_kelas']?>" type="button" class="btn btn-success" name="edit">Edit</a>
							<a href="proses_hapuskelas.php?kode=<?php echo $data['kode_kelas']?>" type="button" class="btn btn-danger" name="hapus">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>	
			
		</div>
	</div>
</div>	