<?php
	include "../koneksi.php";
	$iduser=$_GET['iduser'];	
	$sql=mysqli_query($connect_db,"select * from tbl_user 
	    where id_user='$iduser' ");
	$data=mysqli_fetch_assoc($sql);	
?>
<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Edit Manajemen User</h3>
		</div>
		<div class="card-body">
			<form action="proses_updatemanajemenuser.php" method="POST">
				<div class="form-group">
					<label>Nama</label>
					<input type="hidden" class="form-control" name="txtIDUser" value="<?php echo $data['id_user']?>" >
					<input type="text" class="form-control" name="txtNama" value="<?php echo $data['nm_user']?>" >
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="txtUserName" value="<?php echo $data['username']?>">
				</div>
				<div class="form-group">
					<label>Password (Jika anda tidak mengganti password..kosongkan saja !)</label>
					<input type="text" class="form-control" name="txtPassword">
				</div>
				<div class="form-group">
					<label>Role</label>
					<select name="cboRole" class="form-control">
						<option value="<?php echo $data['role'] ?>"><?php echo $data['role'] ?></option>
						<option value="Administrator">Administrator</option>
						<option value="Petugas">Petugas</option>
					</select>
				</div>	
				<div class="form-group">
					<label>Status</label>
					<select name="cboStatus" class="form-control">
						<option value="<?php 
						if($data['aktif']=='1')
						{ 
							echo 'Aktif'; 
						}else{ 
							echo 'Tidak Aktif';
						}
						?>">
						<?php 
						if($data['aktif']=='1')
						{ 
							echo 'Aktif'; 
						}else{ 
							echo 'Tidak Aktif';
						}
						?>
						</option>
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