<?php
// Include the required functions
function getPrioritas(){
	include('koneksi.php');
	$priorities = [];
	$query = "SELECT priority FROM kriteria ORDER BY id ASC";
	$result = mysqli_query($koneksi, $query);

	if ($result) {
		while ($row = mysqli_fetch_assoc($result)) {
			$priorities[] = $row['priority'];
		}
	} else {
		echo "Error fetching priorities: " . mysqli_error($koneksi);
		exit();
	}
	return $priorities;
}

function inputDataPerbandinganKriteria($kriteria1, $kriteria2, $nilai) {
	// Dummy function for testing purposes
	echo "Comparing Kriteria $kriteria1 and Kriteria $kriteria2: Value = $nilai<br>";
}

// Include the database connection file
include('koneksi.php');

// Call the function to retrieve priorities
$priorities = getPrioritas();

// Print the priorities array to verify data retrieval
echo "Priorities: <pre>";
print_r($priorities);
echo "</pre>";

// Proceed with the matrix calculation
$n = count($priorities);
$matrik = array();

for ($x = 0; $x <= ($n - 2); $x++) {
	for ($y = ($x + 1); $y <= ($n - 1); $y++) {
		$priority1 = $priorities[$x];
		$priority2 = $priorities[$y];

		if ($priority1 == $priority2) {
			$matrik[$x][$y] = 1;
			$matrik[$y][$x] = 1;
		} elseif ($priority1 > $priority2) {
			$matrik[$x][$y] = 1 / ($priority1 - $priority2 + 1);
			$matrik[$y][$x] = $priority1 - $priority2 + 1;
		} else {
			$matrik[$x][$y] = $priority2 - $priority1 + 1;
			$matrik[$y][$x] = 1 / ($priority2 - $priority1 + 1);
		}

		// Display the comparison result (simulates inputDataPerbandinganKriteria)
		inputDataPerbandinganKriteria($x, $y, $matrik[$x][$y]);
	}
}
?>
