
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
      <a class="nav-link" href="menu.php?page=dashboard_petugas">Dashboard</a>
    </li>
    
    <!-- Dropdown -->
    
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Transaksi
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Peminjaman</a>
		<a class="dropdown-item" href="#">Pengembalian</a>
	  </div>		
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
				case 'dashboard_petugas':
					include "../petugas/dashboard_petugas.php";
					break;  
				
				
					
				default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
			}
		}
?>		
</body>
</html>