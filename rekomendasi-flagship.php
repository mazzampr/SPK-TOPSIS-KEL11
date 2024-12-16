<?php 
session_start();
include('koneksi.php');

?>


<?php 
	if(isset($_POST["tambah_hp"])){
		$nama_hp      = $_POST["nama_hp"];
		$harga     = $_POST["harga"];
		$ram       = $_POST["ram"];
		$memori    = $_POST["memori"];
		$processor = $_POST["processor"];
		$kamera_depan    = $_POST["kamera_depan"];
		$kamera_belakang = $_POST["kamera_belakang"];
		$baterai = $_POST["baterai"];
		$garansi = $_POST["garansi"];


		$sql = "INSERT INTO `data_hp` (`id_hp`, `nama_hp`, `harga_hp`, `ram_hp`, `memori_hp`, `processor_hp`, `kamera_depan` , `kamera_belakang`, `baterai`, `garansi`) 
				VALUES (NULL, :nama_hp, :harga_hp, :ram_hp, :memori_hp, :processor_hp, :kamera_depan, :kamera_belakang, :baterai, :garansi)";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':nama_hp', $nama_hp);
		$stmt->bindValue(':harga_hp', $harga);
		$stmt->bindValue(':ram_hp', $ram);
		$stmt->bindValue(':memori_hp', $memori);
		$stmt->bindValue(':processor_hp', $processor);
		$stmt->bindValue(':kamera_depan', $kamera_depan);
		$stmt->bindValue(':kamera_belakang', $kamera_belakang);
		$stmt->bindValue(':baterai', $baterai);
		$stmt->bindValue(':garansi', $garansi);
		$stmt->execute();
	}

	if(isset($_POST["hapus_hp"])){
		$id_hapus_hp = $_POST['id_hapus_hp'];
		$sql_delete = "DELETE FROM `data_hp` WHERE `id_hp` = :id_hapus_hp";
		$stmt_delete = $db->prepare($sql_delete);
		$stmt_delete->bindValue(':id_hapus_hp', $id_hapus_hp);
		$stmt_delete->execute();
		$query_reorder_id=mysqli_query($koneksi,"ALTER TABLE data_hp AUTO_INCREMENT = 1");
	}
?>

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

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Data Table -->
	<link rel="stylesheet" type="text/css" href="assets/dataTable/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="assets/dataTable/jquery.dataTables.min.js"></script>

</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">
								<ul class="left" style="margin-left: -52px;">
								<li><a href="index.php">HOME</a></li>
									<li><a class="active" href="rekomendasi-midrange.php">REKOMENDASI HP FLAGSHIP</a></li>
								</ul>
						</div>
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar hp Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 40px 0px 20px 0px;">
				<ul>
				    <li>
						<div class="row">
						<div class="card">
								<div class="card-content">
									<center><h4 style="margin-bottom: 0px; margin-top: -8px;">Daftar Smartphone Flagship</h4></center>
									<table id="table_id" class="hover dataTablesCustom" style="width:100%">
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>No </center></th>
													<th><center>Nama HP</center></th>
													<th><center>Harga HP</center></th>
													<th><center>RAM HP</center></th>
													<th><center>Memori HP</center></th>
													<th><center>Processor HP</center></th>
													<th><center>Kamera Depan</center></th>
													<th><center>Kamera Belakang</center></th>
													<th><center>Baterai</center></th>
													<th><center>Garansi</center></th>
													<th><center>Hapus</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($koneksi,"SELECT * FROM data_hp");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo $no; ?></center></td>
													<td><center><?php echo $data['nama_hp'] ?></center></td>
													<td><center><?php echo "Rp. ", $data['harga_hp'] ?></center></td>
													<td><center><?php echo $data['ram_hp']," GB" ?></center></td>
													<td><center><?php echo $data['memori_hp']," GB" ?></center></td>
													<td><center><?php echo $data['processor_hp'] ?></center></td>
													<td><center><?php echo $data['kamera_depan']," MP" ?></center></td>
													<td><center><?php echo $data['kamera_belakang']," MP" ?></center></td>
													<td><center><?php echo $data['baterai']," mAh" ?></center></td>
													<td><center><?php echo $data['garansi']," Tahun" ?></center></td>
													<td>
														<center>
															<form method="POST">
																<input type="hidden" name="id_hapus_hp" value="<?php echo $data['id_hp'] ?>">
																<button type="submit" name="hapus_hp" style="height: 32px; width: 32px;" class="btn-floating btn-small waves-effect waves-light red"><i style="line-height: 32px;" class="material-icons">remove</i></button>
															</form>
														</center>
													</td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
							<a href="#tambah" class="btn-floating btn-large waves-effect waves-light teal btn-float-custom"><i class="material-icons">add</i></a>
						</div>
				    </li>
				</ul>

			    <?php
			    include('fungsi.php');
			    ?>
			    <center><section class="content">
				    <h2 class="ui header">Perbandingan Kriteria</h2>
				    <?php showTabelPerbandingan('kriteria','kriteria'); ?>
			    </section></center>
		    </div>

		    </div>
		</div>
	</div>

	<!-- Daftar hp End -->

	<!-- Modal Start -->
	<div id="tambah" class="modal" style="width: 40%; height: 100%;">
		<div class="modal-content">
			<div class="col s6">
					<div class="card-content">
						<div class="row">
							<center><h5 style="margin-top:-8px;">Masukan Smartphone</h5></center>
							<form method="POST" action="">
								<div class = "row">
									<div class="col s12">

										<div class="col s6" style="margin-top: 10px;">
											<b>Nama HP</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="nama_hp" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Harga (Rp)</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="harga" type="number" required>
										</div>
										
										<div class="col s6" style="margin-top: 10px;">
										<b>RAM</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="ram">
												<!-- <option value = "" disabled selected>Kriteria RAM</option>  -->
												<option value = "4">4 Gb</option>
												<option value = "6">6 Gb</option>
												<option value = "8">8 Gb</option>
												<option value = "12">12 Gb</option>
												<option value = "16">16 Gb</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Memori</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="memori">
												<!-- <option value = "" disabled selected>Kriteria Penyimpanan</option> -->
												<option value = "4">4 Gb</option>
												<option value = "8">8 Gb</option>
												<option value = "16">16 Gb</option>
												<option value = "32">32 Gb</option>
												<option value = "64">64 Gb</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Processor</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="processor" id="processor">
												<?php
												$result = mysqli_query($koneksi, "SELECT chipset FROM nanoreview ORDER BY chipset ASC");

												if ($result) {
													if (mysqli_num_rows($result) > 0) {
														while ($row = mysqli_fetch_assoc($result)) {
															echo '<option value="' . htmlspecialchars($row['chipset']) . '">' . htmlspecialchars($row['chipset']) . '</option>';
														}
													} else {
														echo '<option value="">No processors available</option>';
													}
												} else {
													echo '<option value="">Error loading database</option>';
												}
												?>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Kamera Depan (MP)</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="kamera_depan" type="number" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Kamera Belakang (MP)</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="kamera_belakang" type="number" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Baterai (mAh)</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="baterai" type="number" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Garansi</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="garansi">
												<!-- <option value = "" disabled selected>Kriteria Kamera</option> -->
												<option value = "1">1 Tahun</option>
												<option value = "2">2 Tahun</option>
												<option value = "3">3 Tahun</option>
												<option value = "4">4 Tahun</option>
												<option value = "5">5 Tahun</option>
											</select>
										</div>

									</div>  
								</div> 
								<center><button name="tambah_hp" type="submit" class="waves-effect waves-light btn teal" style="margin-top: 0px;">Tambah</button></center>	
							</form>
						</div>
					</div>
				</div>
			</div>
		<div style="height: 0px; "class="modal-footer">
          <a style="margin-top: -30px;" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
	</div>
	<!-- Modal End -->

	<!-- Modal Start -->
	<div id="about" class="modal">
		<div class="modal-content">
			<h4>Tentang</h4>
			<p>Sistem Pendukung Keputusan Pemilihan Smartphone ini menggunakan metode TOPSIS yang dibangun menggunakan bahasa PHP.
			Sistem ini dibuat sebagai Tugas Akhir Mata Kuliah Sistem Pendukung Keputusan Prodi Sistem Informasi UPNVJT <br>
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
		$('.modal').modal();
		$('#table_id').DataTable({
    		"paging": false
		});
	    });
	</script>
</body>
</html>