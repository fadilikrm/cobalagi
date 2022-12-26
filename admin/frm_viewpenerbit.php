<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Penerbit</h3>
		</div>
		<div class="card-body">
			<a href="menu.php?page=frm_penerbit" type="button" class="btn btn-primary" name="input">Input</a>
			<br>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Kode Penerbit</th>
						<th>Nama Penerbit</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql=mysqli_query($connect_db,"select * from tbl_penerbit");
						$nomor=1;
						while($data=mysqli_fetch_assoc($sql))
						{
					?>
					<tr>
						<td><?php echo $nomor++ ?></td>
						<td><?php echo $data['kd_penerbit']?></td>
						<td><?php echo $data['nm_penerbit']?></td>
						<td>
							<a href="menu.php?page=frm_editpenerbit&kode=<?php echo $data['kd_penerbit']?>" type="button" class="btn btn-success" name="edit">Edit</a>
							<a href="proses_hapuspenerbit.php?kode=<?php echo $data['kd_penerbit']?>" type="button" class="btn btn-danger" name="hapus">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>	
			
		</div>
	</div>
</div>	