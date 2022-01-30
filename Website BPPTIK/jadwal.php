<html>
	<head>
		<title>Jadwal</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<nav class="navbar navbar-light bg-light" aria-label="Main navigation">
		  <div class="container-fluid">
		    <a class="navbar-brand">
		    	<img src="images/bpptik.png" alt="" height="50">
		    </a>
		    <form class="d-flex">
		      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		      <button id="search" class="btn btn-warning" type="submit">Search</button>
		    </form>
  		  </div>
		</nav>

		<nav class="navbar" style="background-color: yellow" > </nav>

		<nav class="nav" aria-label="Secondary navigation">
			<ul class="nav mx-auto my-2 order-0 order-md-1 position-relative">
				<li class="nav-item">
					<a class="nav-link" href="index.php" style="margin-left: 5%">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">LSP</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a href="visi.php" class="dropdown-item">Visi dan Misi LSP BPPTIK</a></li>
						<li><a href="organisasi.php" class="dropdown-item">Struktur Organisasi LSP BPPTIK</a></li>
						<li><a href="personil.php" class="dropdown-item">Personil LSP BPPTIK</a></li>
						<li><a href="lingkup.php" class="dropdown-item">Ruang Lingkup LSP BPPTIK</a></li>
						<li><a href="skema.php" class="dropdown-item">Skema Sertifikasi</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pelatihan.php">Pelatihan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="sertifikasi.php">Sertifikasi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="jadwal.php">Jadwal</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://sidatik.kominfo.go.id/" target="_blank">Sidatik</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="register.php" >Register</a>
				</li>
			</ul>
		</nav>
		<div class="container" style="margin-top: 1%;">
			<div class="bg-white rounded" style="padding-left: 1%; padding-bottom: 5%;">
				<h4 style="color:#0E4C92; padding-top: 3%;padding-bottom: 1%;">Jadwal</h4> <hr>
				<div class="text-center">
					<img src="images/jadwal.jpg" alt="" style="width: 70%;">
				</div>

				<p>
					Pengumuman Pelatihan dan Sertifikasi Bidang TIK untuk ASN <i><a href="#">(klik di sini)</a></i>
					<br />
					Download Surat Penawaran <i><a href="#">(klik di sini)</a></i>
					<br />
					Download Surat Izin Instansi <i><a href="#">(klik di sini)</a></i>
					<br />
					Daftar Pelatihan dan Sertifikasi Bidang TIK untuk ASN <i><a href="#">(klik di sini)</a></i>
				</p>
			</div>
		</div>
		<br />
	<footer class="footer">
				<p><strong>Info Lainnya</strong></p>
				<p><a href="#">LOKASI HIBURAN</a></p>
				<p><a href="#" id="stat">STATISTIK KOMINFO</a></p>
		</footer>
		<div class="align-bottom" id="stiky">
		<p>Copyright &copy 2021 Syahril</p>
		</div>
	</body>
</html>