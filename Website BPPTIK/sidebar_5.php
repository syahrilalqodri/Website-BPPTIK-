<!DOCTYPE html>
<html lang="en">	
	<head>
		<title>Skema Sertifikasi</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
		<script type="text/javascript">
		$(document).ready(function() {
		    var table = $('#tab').DataTable( {
		        scrollY:        "300px",
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
						<li><a href="sidebar_1.php" class="dropdown-item">Visi dan Misi LSP BPPTIK</a></li>
						<li><a href="sidebar_2.php" class="dropdown-item">Struktur Organisasi LSP BPPTIK</a></li>
						<li><a href="sidebar_3.php" class="dropdown-item">Personil LSP BPPTIK</a></li>
						<li><a href="sidebar_4.php" class="dropdown-item">Ruang Lingkup LSP BPPTIK</a></li>
						<li><a href="sidebar_5.php" class="dropdown-item">Skema Sertifikasi</a></li>
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
		<div class="row g-5">

		<div class="col-md-3 " >
		<ul class="nav list-group">
					<li class="nav-item"><a class="nav-link" href="sidebar_1.php">Visi Dan Misi LSP BPPTIK</a></li>
					<li class="nav-item"><a class="nav-link" href="sidebar_2.php">Struktur Organisasi LSP BPPTIK</a></li>
					<li class="nav-item"><a class="nav-link" href="sidebar_3.php">Personil LSP BPPTIK</a></li>
					<li class="nav-item"><a class="nav-link" href="sidebar_4.php">Ruang Lingkup LSP BPPTIK</a></li>
					<li class="nav-item"><a class="nav-link" href="sidebar_5.php">Skema Sertifikasi</a></li>
				</ul>
		</div>

			<div class="col-md-6 bg-white rounded">
				<h4 style="color: #0E4C92; margin-top: 3%;">Skema Sertifikasi</h4><hr>

				<div class="datatable">
					<table id="tab" class="table table-striped stripe row-border order-column" cellspacing="3" width="100%">
				    <?php 
				    $no=1;
				     ?>
				        <thead>
				            <tr>
				                <th>No.</th>
				                <th>Skema Sertifikasi</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td><a href="#">Skema Sertifikasi Okupasi Teknisi Utama Jaringan Komputer</a></td>
				            </tr>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td><a href="#">Skema Sertifikasi Okupasi Junior Office Operator</a></td>
				            </tr>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td><a href="#">Skema Sertifikasi Okupasi Pengembang Web Pratama (Junior Web Developer)</a></td>
				            </tr>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td><a href="#">Skema Sertifikasi Okupasi Desainer Grafis Muda (Junior Graphic Designer)</a></td>
				            </tr>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td><a href="#">Skema Sertifikasi Okupasi Network Administrator Muda (Junior Network Administrator)</a></td>
				            </tr>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td><a href="#">Skema Sertifikasi Okupasi Pemrogram Mobil Pratama (Junior Mobile Programmer)</a></td>
				            </tr>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td><a href="#">Skema Sertifikasi Okupasi Animator Madya (Intermediate Animator)</a></td>
				            </tr>
				        </tbody>
				    </table>
					
				</div>

				<br>

			</div>
			<div class="col-md-3">
					<div class="p-4 mb-3 bg-white rounded">
						<a href="jadwal.php"><img src="images/tik.jpeg" alt="" style="width: 100%"></a>
					</div>
					<div class="p-4 bg-white rounded">
						<a href="pelatihan.php"><img src="images/skkni.jpeg" alt="" style="width: 100%"></a>
					</div>
					<br>
					<div class="card" style="width: 16rem; background-color: #0E4C92; color: white;">
					  <div class="card-body">
					    <h6 class="card-title">News Letter</h6>
					    <p class="card-text" style="text-align: center; font-size: 15px;">Daftarkan e-mail Anda ke Newsletter BPPTIK untuk mendapatkan update dari kami: <br>
					    	<input type="text" style="margin-bottom:3%;"> 
					    	<button type="button" class="btn btn-light btn-sm">Daftar</button>
					    	<br>
						Setelah mendaftar Newsletter, jangan lupa segera buka e-mail Anda untuk mengaktivasikan Newsletternya. (Catatan: jika e-mail dari kami tidak ada di inbox e-mail Anda, mohon periksa pada folder bulk/spam e-mail Anda)</p>
					  </div>
					</div>
					<br>
					<div class="card" style="width: 16rem; background-color: #0E4C92; color: white;">
					  <div class="card-body">
					    <h6 class="card-title">Link Terkait</h6>
					    <div class="text-center">
					    <a href="lan.go.id/index.php"><img src="images/lembaga.png" alt="" width="50"></a>
					    <a href="kominfo.go.id"><img src="images/kominfo.png" alt="" width="50"></a>
					    <a href="bnsp.go.id"><img src="images/bnsp2.png" alt="" width="50"></a>
						</div>
					  </div>
					</div>
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