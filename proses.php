<?php

include('koneksi.php');
include('fungsi.php');

$harga = $_POST['harga'];
$ram = $_POST['ram'];
$memori = $_POST['memori'];
$processor = $_POST['processor'];
$kameraDepan = $_POST['kameraDepan'];
$kameraBelakang = $_POST['kameraBelakang'];
$baterai = $_POST['baterai'];
$garansi = $_POST['garansi'];

try {
	$data = [
		'Harga' => $harga,
		'Ram' => $ram,
		'Rom' => $memori,
		'Processor' => $processor,
		'KameraDepan' => $kameraDepan,
		'KameraBelakang' => $kameraBelakang,
		'Baterai' => $baterai,
		'Garansi' => $garansi
	];

	foreach ($data as $nama => $priority) {
		$query = "UPDATE kriteria SET priority = ? WHERE nama = ?";
		$stmt = $koneksi->prepare($query);
		$stmt->bind_param("is", $priority, $nama);
		$stmt->execute();
	}

} catch (Exception $e) {
	echo "Error: " . $e->getMessage();
}


if (isset($_POST['submit'])) {
//	$n		= getJumlahKriteria();
//	// memetakan nilai ke dalam bentuk matrik
//	// x = baris
//	// y = kolom
//	$matrik = array();
//	$urut 	= 0;
//
//	for ($x=0; $x <= ($n-2) ; $x++) {
//		for ($y=($x+1); $y <= ($n-1) ; $y++) {
//			$urut++;
//			$pilih	= "pilih".$urut;
//			$bobot 	= "bobot".$urut;
//			if ($_POST[$pilih] == 1) {
//				$matrik[$x][$y] = $_POST[$bobot];
//				$matrik[$y][$x] = 1 / $_POST[$bobot];
//			} else {
//				$matrik[$x][$y] = 1 / $_POST[$bobot];
//				$matrik[$y][$x] = $_POST[$bobot];
//			}
//			inputDataPerbandinganKriteria($x,$y,$matrik[$x][$y]);
//		}
//	}


	$arrayPrioritas = getPrioritas();
	$n = count($arrayPrioritas); 
	$matrik = array();

	for ($x = 0; $x <= ($n - 2); $x++) {
		for ($y = ($x + 1); $y <= ($n - 1); $y++) {
			$prioritas1 = $arrayPrioritas[$x];
			$prioritas2 = $arrayPrioritas[$y];

			if ($prioritas1 == $prioritas2) {
				$matrik[$x][$y] = 1;
				$matrik[$y][$x] = 1;
			} elseif ($prioritas1 > $prioritas2) {
				$matrik[$x][$y] = 1 / ($prioritas1 - $prioritas2 + 1);
				$matrik[$y][$x] = $prioritas1 - $prioritas2 + 1;
			} else {
				$matrik[$x][$y] = $prioritas2 - $prioritas1 + 1;
				$matrik[$y][$x] = 1 / ($prioritas2 - $prioritas1 + 1);
			}

			inputDataPerbandinganKriteria($x, $y, $matrik[$x][$y]);
		}
	}

	// diagonal --> bernilai 1
	for ($i = 0; $i <= ($n-1); $i++) {
		$matrik[$i][$i] = 1;
	}

	// inisialisasi jumlah tiap kolom dan baris kriteria
	$jmlmpb = array();
	$jmlmnk = array();
	for ($i=0; $i <= ($n-1); $i++) {
		$jmlmpb[$i] = 0;
		$jmlmnk[$i] = 0;
	}

	// menghitung jumlah pada kolom kriteria tabel perbandingan berpasangan
	for ($x=0; $x <= ($n-1) ; $x++) {
		for ($y=0; $y <= ($n-1) ; $y++) {
			$value		= $matrik[$x][$y];
			$jmlmpb[$y] += $value;
		}
	}


	// menghitung jumlah pada baris kriteria tabel nilai kriteria
	// matrikb merupakan matrik yang telah dinormalisasi
	for ($x=0; $x <= ($n-1) ; $x++) {
		for ($y=0; $y <= ($n-1) ; $y++) {
			$matrikb[$x][$y] = $matrik[$x][$y] / $jmlmpb[$y];
			$value	= $matrikb[$x][$y];
			$jmlmnk[$x] += $value;
		}

		// nilai priority vektor
		$pv[$x]	 = $jmlmnk[$x] / $n;

		// memasukkan nilai priority vektor ke dalam tabel pv_kriteria dan pv_alternatif
		$id_kriteria = getKriteriaID($x);
		inputKriteriaPV($id_kriteria,$pv[$x]);
	}



	// cek konsistensi
	$eigenvektor = getEigenVector($jmlmpb,$jmlmnk,$n);
	$consIndex   = getConsIndex($jmlmpb,$jmlmnk,$n);
	$consRatio   = getConsRatio($jmlmpb,$jmlmnk,$n);

	include('output.php');

}else {
	echo "Data belum terisi.";
}


?>
