<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pelatihan LSP BPPTIK</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
		<script type="text/javascript">
		$(document).ready(function() {
		    var table = $('#tab').DataTable( {
		        scrollY:        "600px",
		        scrollX:        true,
		        scrollCollapse: false,
		        paging:         false,
		        fixedColumns:   {
		            leftColumns: 1,
		        }
		    } );
		});
		</script>
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
				<h4 style="color: #0E4C92; padding-top: 3%;padding-bottom: 1%;">Pelatihan</h4><hr>
				<p>Program Pelatihan yang tersedia di BPPTIK terbagi 2, yaitu Pelatihan Teknis dan Pelatihan Kerja. Pelatihan Teknis ditujukan untuk Aparatur Sipil Negara (ASN), yang mengacu kepada PP Nomor 11 Tahun 2017 tentang Manajemen PNS dan PP Nomor 49 Tahun 2018 tentang Manajemen PPPK. Sedangkan Pelatihan Kerja ditujukan untuk masyarakat umum, yang mengacu kepada PP Nomor 31 Tahun 2006 tentang Sistem Pelatihan Kerja Nasional. Daftar Program Pelatihan yang tersedia adalah sbb:</p>
				<div class="container">
					<h5>Pelatihan Teknis Bidang TIK:</h5>
					<table id="tab" class="table table-striped stripe row-border order-column" cellspacing="3" width="100%">
				    <?php 
				    $no=1;
				     ?>
				        <thead>
				            <tr>
				                <th>No.</th>
				                <th>Nama Pelatihan</th>
				                <th>JKode</th>
				                <th>Jenis</th>
				                <th>Jenjang</th>
				                <th>Durasi (JP)</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td>Pelatihan Video Production</td>
				                <td>P-2016-002</td> 
				                <td>Pengguna</td> 
				                <td>Pengawas</td>
				                <td>44</td>

				            </tr>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td>Pelatihan Database Development Tingkat Dasar</td>
				                <td>P-2017-001</td> 
				                <td>Pengelola</td> 
				                <td>Pelaksana</td>
				                <td>40</td>

				            </tr>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td>Pelatihan Web Design</td>
				                <td>P-2017-003</td> 
				                <td>Pengelola</td> 
				                <td>Pelaksana</td>
				                <td>40</td>
				            </tr>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td>Pelatihan Aplikasi SiMaya</td>
				                <td>P-2017-005</td> 
				                <td>Pengelola</td> 
				                <td>Pelaksana</td>
				                <td>30</td>
				            </tr>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td>Pelatihan Esensi TIK</td>
				                <td>P-2017-006</td> 
				                <td>Pengguna/td> 
				                <td>Pelaksana</td>
				                <td>40</td>
				            </tr>
				            <tr>
				            	<td><?php echo $no++; ?></td>
				            	<td>Pelatihan Pengelolaan Informasi Publik</td>
				                <td>P-2017-008</td> 
				                <td>Pengguna</td> 
				                <td>Pelaksana</td>
				                <td>40</td>
				            </tr>
				            <tr>
				            	<td><?php echo $no++; ?></td>
				            	<td>Pelatihan Desktop Programming Tingkat Dasar</td>
				                <td>P-2017-010</td> 
				                <td>Pengelola</td> 
				                <td>Pelaksana</td>
				                <td>40</td>
				            </tr>
				            <tr>
				            	<td><?php echo $no++; ?></td>
				            	<td>Pelatihan System Administration Tingkat Dasar</td>
				                <td>P-2017-012</td> 
				                <td>Pengelola</td> 
				                <td>Pelaksana</td>
				                <td>40</td>
				            </tr>
				            <tr>
				            	<td><?php echo $no++; ?></td>
				            	<td>Pelatihan Database Development Tingkat Lanjutan</td>
				                <td>P-2017-013</td> 
				                <td>Pengelola</td> 
				                <td>Pengawas</td>
				                <td>40</td>
				            </tr>
				        </tbody>
				    </table>
				</div>
			</div>
		</div>
	
				<br>
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