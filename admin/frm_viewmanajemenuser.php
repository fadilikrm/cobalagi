<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Daftar Manajemen User</h3>
		</div>
		<div class="card-body">
			<a href="menu.php?page=frm_manajemenuser" type="button" 
			  name="tambah" class="btn btn-primary">Input</a>
				
			<table class="table table-striped">
				<thead>
					<tr>
						<th align="center">No</th>
						<th align="left">Nama User</th>
						<th align="left">Username</th>
						<th align="Center">Role</th>
						<th align="Center">Status</th>
						<th align="center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql=mysqli_query($connect_db,"select * from tbl_user");
						$nomor=1;
						while($data=mysqli_fetch_assoc($sql))
						{
					?>
					<tr>
						<td><?php echo $nomor++ ?></td>
						<td><?php echo $data['nm_user'] ?></td>
						<td><?php echo $data['username'] ?></td>
						<td><?php echo $data['role'] ?></td>
						<td>
							<?php
								if($data['aktif']=='1')
								{
									echo "Aktif";
								}else{
									echo "Tidak Aktif";
								}
							?>
						</td>
						<td>
							<a href="menu.php?page=frm_editmanajemenuser&iduser=<?php echo $data['id_user']?>" type="button" name="edit" class="btn btn-success">Edit</a>
							<a href="proses_hapusmanajemenuser.php?iduser=<?php echo $data['id_user']?>" type="button" name="hapus" class="btn btn-danger">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>