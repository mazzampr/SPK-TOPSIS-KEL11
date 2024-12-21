<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Smartphone</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png"> 	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>

	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">

								<ul class="left" style="margin-left: -52px;">
									<li><a href="index.php">HOME</a></li>
									<li><a class="active" href="rekomendasi.php">REKOMENDASI</a></li>
                                    <li><a href="daftar_hp.php">DAFTAR SMARTPHONE</a></li>
                                    <li><a href="#about">TENTANG</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar Laptop Start -->
        <div style="background-color: #efefef">
            <div class="container">
                <div class="section-card" style="padding: 32px 0px 20px 0px">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col s3">
                                </div>
                                <div class="col s6">      
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="row">
                                                <center><h4>Menentukan Prioritas</h4></center>
	                                            <center><h6>Pilih 1 (Prioritas Utama) sampai 8 (Prioritas Terakhir)</h6></center>
	                                            <center><h6>Boleh sama prioritasnya & boleh kurang dari 8 sama seperti contoh</h6></center>
                                                <br>
                                                <form class = "col s12 ui form" method="post" action="proses.php">
                                                    <div class = "row">
                                                        <div class="col s12">

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Harga</b>
                                                            </div>
	                                                        <div class="col s6">
		                                                        <input type="number" name="harga" required min="1" max="8" placeholder="Misal prioritas 1" style="width: 100%; padding: 5px;"
		                                                        >
	                                                        </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                            <b>RAM</b>
                                                            </div>
	                                                        <div class="col s6">
		                                                        <input type="number" name="ram" required min="1" max="8" placeholder="Misal prioritas 2" style="width: 100%; padding: 5px;"
		                                                        >
	                                                        </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Memori</b>
                                                            </div>
	                                                        <div class="col s6">
		                                                        <input type="number" name="memori" required min="1" max="8" placeholder="Misal prioritas 3" style="width: 100%; padding: 5px;"
		                                                        >
	                                                        </div>

	                                                        <div class="col s6" style="margin-top: 10px;">
		                                                        <b>Processor</b>
	                                                        </div>
	                                                        <div class="col s6">
		                                                        <input type="number" name="processor" required min="1" max="8" placeholder="Misal prioritas 1" style="width: 100%; padding: 5px;"
		                                                        >
	                                                        </div>


	                                                        <div class="col s6" style="margin-top: 10px;">
                                                                <b>Kamera Depan </b>
                                                            </div>
	                                                        <div class="col s6">
		                                                        <input type="number" name="kameraDepan" required min="1" max="8" placeholder="Misal prioritas 4" style="width: 100%; padding: 5px;"
		                                                        >
	                                                        </div>

	                                                        <div class="col s6" style="margin-top: 10px;">
		                                                        <b>Kamera Belakang</b>
	                                                        </div>
	                                                        <div class="col s6">
		                                                        <input type="number" name="kameraBelakang" required min="1" max="8" placeholder="Misal prioritas 4" style="width: 100%; padding: 5px;"
		                                                        >
	                                                        </div>

	                                                        <div class="col s6" style="margin-top: 10px;">
		                                                        <b>Baterai </b>
	                                                        </div>
	                                                        <div class="col s6">
		                                                        <input type="number" name="baterai" required min="1" max="8" placeholder="Misal prioritas 5" style="width: 100%; padding: 5px;"
		                                                        >
	                                                        </div>

	                                                        <div class="col s6" style="margin-top: 10px;">
		                                                        <b>Garansi </b>
	                                                        </div>
	                                                        <div class="col s6">
		                                                        <input type="number" name="garansi" required min="1" max="9" placeholder="Misal prioritas 6" style="width: 100%; padding: 5px;"
		                                                        >
	                                                        </div>
                                                            
                                                        </div>

                                                    <center><input type="text" name="jenis" value="kriteria" hidden>
	                                                    <button type="submit" name="submit" value="SUBMIT" class="waves-effect waves-light btn" style="margin-bottom:-46px;">Hitung</button></center>
                                                </form>       
                                            </div>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="col s3">
                                </div>
                            </div>
                        </li>
                    </ul>	     
                </div>
            </div>
        </div>
        <!-- Rekomendasi Laptop End -->

    <!-- Modal Start -->
	<div id="about" class="modal">
        <div class="modal-content">
          <h4>Tentang</h4>
          <p>Sistem Pendukung Keputusan Pemilihan Smartphone ini menggunakan metode TOPSIS yang dibangun menggunakan bahasa PHP.
				Sistem ini dibuat sebagai Tugas Akhir Mata Kuliah Sistem Pendukung Keputusan Prodi Sistem Informasi UPNVJT. <br>
			</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
      <div class="container">
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Smartphone 2018.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  $(document).ready(function(){
	      $('.parallax').parallax();
          $('select').material_select();
          $('.modal').modal();
	    });
    </script>
</body>
</html>