<div class="container-fluid p-3">
	<div class="card">
		<div class="card-header">
			<h3>Form Peminjaman Buku Perpustakaan</h3>
		</div>
		<div class="card-body">
			<form action="proses_rekampeminjamanbuku.php" method="POST">
				<div class="form-group">
					<label>NIS</label>
					<select name="cboNIS" class="form-control">
						<option value="" selected>Pilih Siswa</option>
						<?php
							$sql=mysqli_query($connect_db,"select * from tbl_siswa");
							while($data=mysqli_fetch_assoc($sql))
								{
						?>
						<option value="<?php echo $data['nis'] ?>" >
							<?php echo $data['nis'] ?> | <?php echo $data['nama'] ?> | <?php echo $data['kode_kelas'] ?> 
						</option>
						
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label>Tanggal Pinjam</label>
					<input type="date" name="txtTgl" class="form-control">
				</div>	
				<div class="form-group">
					<b>Silahkan anda memilih buku yang akan dipinjam :</b>
					<table class="table table-striped">
					<thead>
						<tr>
							<th align="center">
								<input type="checkbox" id="check-all">
							</th>
							<th>No</th>
							<th>Kode</th>
							<th>Judul</th>
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
							<td>
								<input type='checkbox' class='check-item' name='id[]' value="<?php echo $data['kd_buku'] ?>" >
							</td>
							<td><?php echo $nomor++ ?></td>
							<td><?php echo $data['kd_buku']?></td>
							<td><?php echo $data['judul']?></td>
							
						</tr>
						<?php } ?>
					</tbody>
				</table>
				</div>
			</form>	
		</div>
	</div>
</div>
<script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    $("#check-all").click(function(){ // Ketika user men-cek checkbox all
      if($(this).is(":checked")) // Jika checkbox all diceklis
        $(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
      else // Jika checkbox all tidak diceklis
        $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
	  	
    });
    
	

    $("#btn-rekam").click(function(){ // Ketika user mengklik tombol delete
      var confirm = window.confirm("Apakah Anda yakin ingin merekam data buku ini?"); // Buat sebuah alert konfirmasi
      
      if(confirm) // Jika user mengklik tombol "Ok"
        //$("#form-rekam").submit(); // Submit form
		 var data = $('.form-rekam').serialize();
            $.ajax({
              type: 'POST',
              url: "proses_rekampinjambuku.php",
              cache: false,
              data: data
			});
	});
  });
</script>	