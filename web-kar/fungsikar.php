
<?php  
function ambilPasien($kon){
	$sql = "SELECT id_pasien, nama FROM pasien";
	$res = mysqli_query($kon, $sql);

	$data_pasien = array();

	while ($data = mysqli_fetch_assoc($res)) {
		$data_pasien[] = $data;
	}
	return $data_pasien;
}
?>

<?php  
function ambilDokter($kon){
	$sql = "SELECT id_dokter, nama_dokter FROM dokter";
	$res = mysqli_query($kon, $sql);

	$data_dokter = array();

	while ($data = mysqli_fetch_assoc($res)) {
		$data_dokter[] = $data;
	}
	return $data_dokter;
}
?>