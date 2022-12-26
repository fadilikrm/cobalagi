<html>
<head>
	<title>Perpustakaan Sekolah UKK 2022</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	
	<style>
		body {
			background:#8FBC8F;
			background-repeat:no-repeat;
		}
		#card {
			background: #fbfbfb;
			border-radius: 8px;
			box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
			height: 410px;
			margin: 6rem auto 8.1rem auto;
			width: 329px;
		}
		#card-content{
			padding:12px 44px;
		}
		#card-title{
			letter-spacing:4px;
			padding-bottom:23px;
			padding-top:13px;
			text-align:center;
		}
	</style>
</head> 
<body>
	<div id="card">
		<div id="card-content">
			<div id="card-title">
				<h4>LOGIN USER</h4>
				<hr>
			</div>
			<form action="cek_login.php" method="POST">	
					<div class="form-group">
						<label>Username :</label>
						<input type="text" name="txtusername" class="form-control" 
						  placeholder="Username" >
					</div>
					<div class="form-group">
						<label>Password :</label>
						<input type="password" name="txtpassword" class="form-control" 
						  placeholder="Password">
					</div>
					<div class="form-group">
						<button type="submit" name="kirim" 
						class="btn btn-primary btn-block">Login</button>
					</div>
			</form>
		</div>	
	</div>
</body>
</html>