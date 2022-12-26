
<?php
	include "../koneksi.php";
	session_start();
	$role=$_SESSION['roleuser'];
?>
<html>
<head>
	<title>UKK-Perpustakaan Sekolah</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
      <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-light">
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="menu.php?page=dashboard_admin">Dashboard</a>
    </li>
    
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Master Data
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="menu.php?page=frm_viewkategori">Data Kategori</a>
		<a class="dropdown-item" href="menu.php?page=frm_viewpenerbit">Data Penerbit</a>
		<a class="dropdown-item" href="menu.php?page=frm_viewbuku">Data Buku</a>
		<a class="dropdown-item" href="menu.php?page=frm_viewsiswa">Data Siswa</a>
        <a class="dropdown-item" href="menu.php?page=frm_viewkelas">Data Kelas</a>
		<a class="dropdown-item" href="menu.php?page=frm_pengaturan">Data Pengaturan</a>
		<a class="dropdown-item" href="#">Logout</a>
      </div>
    </li>
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Transaksi
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="menu.php?page=frm_peminjamanbuku">Peminjaman</a>
		<a class="dropdown-item" href="#">Pengembalian</a>
	  </div>		
	</li>
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Laporan
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Data Buku</a>
		<a class="dropdown-item" href="#">Buku Yg Dipinjam</a>
		<a class="dropdown-item" href="#">Siswa Yg Meminjam</a>
	  </div>		
	</li>
	<li class="nav-item">
		  <a class="nav-link" href="menu.php?page=frm_manajemenuser">Manajemen User</a>
	</li>
	
	<li class="nav-item">
      <a class="nav-link" href="../logout.php">Logout</a>
    </li>
  </ul>
</nav>
<?php 
		if(isset($_GET['page'])){
			$page = $_GET['page'];
		   
			switch ($page) {								
				case 'dashboard_admin':
					include "../admin/dashboard_admin.php";
					break; 
				case 'frm_pengaturan':
					include "../admin/frm_pengaturan.php";
					break;
				case 'frm_kategori':
					include "../admin/frm_kategori.php";
					break;
				case 'frm_editkategori':
					include "../admin/frm_editkategori.php";
					break;	
				case 'frm_viewkategori':
					include "../admin/frm_viewkategori.php";
					break;
				case 'frm_viewpenerbit':
					include "../admin/frm_viewpenerbit.php";
					break;
				case 'frm_penerbit':
					include "../admin/frm_penerbit.php";
					break;
				case 'frm_editpenerbit':
					include "../admin/frm_editpenerbit.php";
					break;	
				
				case 'frm_viewkelas':
					include "../admin/frm_viewkelas.php";
					break;
				case 'frm_kelas':
					include "../admin/frm_kelas.php";
					break;
				case 'frm_editkelas':
					include "../admin/frm_editkelas.php";
					break;

				case 'frm_viewsiswa':
					include "../admin/frm_viewsiswa.php";
					break;
				case 'frm_siswa':
					include "../admin/frm_siswa.php";
					break;
				case 'frm_editsiswa':
					include "../admin/frm_editsiswa.php";
					break;
				
				case 'frm_viewbuku':
					include "../admin/frm_viewbuku.php";
					break;
				case 'frm_buku':
					include "../admin/frm_buku.php";
					break;
				case 'frm_editbuku':
					include "../admin/frm_editbuku.php";
					break;

				case 'frm_viewmanajemenuser':
					include "../admin/frm_viewmanajemenuser.php";
					break;
				case 'frm_manajemenuser':
					include "../admin/frm_manajemenuser.php";
					break;
				case 'frm_editmanajemenuser':
					include "../admin/frm_editmanajemenuser.php";
					break;	
				
				case 'frm_peminjamanbuku':
					include "../admin/frm_peminjamanbuku.php";
					break;
				case 'frm_keranjangpinjam':
					include "../admin/frm_keranjangpinjam.php";
					break;		
					
				default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
			}
		}
?>		
</body>
</html>