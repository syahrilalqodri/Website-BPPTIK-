<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sertifikasi</title>
		<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

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
			<div class="bg-white rounded" style="padding-left: 1%; padding-bottom: 15%;">
				<h4 style="color:#0E4C92; padding-top: 3%;padding-bottom: 1%;">Sertifikasi Kompetensi Bidang TIK</h4> <hr>
				<p>
					<a href="#">Sertifikasi Kompetensi Kerja</a> (selanjutnya disebut Sertifikasi Kompetensi) bidang <a href="#">Teknologi Informasi dan Komunikasi (TIK)</a> di BPPTIK diselenggarakan pasca Pelatihan. Kegiatan Pelatihan dan Sertifikasi dapat dilihat di <a href="#">SIPS BPPTIK</a> <a href="#">(klik di sini)</a>.
				</p>

				<p>
					<h4 style="color:#0E4C92; padding-top: 3%;padding-bottom: 1%;" align="center"> Peta Lokasi</h4>
				</p>


		<div align="center">
			<div id="mapid" style="width: 600px; height: 400px;"></div>
			<script>

				var mymap = L.map('mapid').setView([-6.280683737757476, 107.1750659650916], 13);

				L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
					maxZoom: 18,
					attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
						'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
					id: 'mapbox/streets-v11',
					tileSize: 512,
					zoomOffset: -1
				}).addTo(mymap);

				L.marker([-6.280683737757476, 107.1750659650916]).addTo(mymap)
					.bindPopup("<b>BPPTIK</b><br />Kementerian Kominfo").openPopup();


				var popup = L.popup();

				function onMapClick(e) {
					popup
						.setLatLng(e.latlng)
						.setContent("You clicked the map at " + e.latlng.toString())
						.openOn(mymap);
				}

				mymap.on('click', onMapClick);

			</script>

		</div>
				
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