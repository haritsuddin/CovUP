	<?php 
include "loginkar.php";
?>
<?php 
include '../koneksi.php';

if (isset($_POST['simpan'])){

	$id_pasien = $_POST['id_pasien'];
	$suhu = $_POST['suhu'];
	$tgl_cek = $_POST['tgl_cek'];
	$keadaan = $_POST['keadaan'];
	$id_dokter =$_POST['id_dokter'];

$sql = "INSERT INTO karantina 
			VALUES ('','$id_pasien','$suhu','$tgl_cek','$keadaan',$id_dokter)";
	$res = mysqli_query($kon,$sql);

	$count = mysqli_affected_rows($kon);

	
	if($res>0){


    echo "<script>alert('data berhasil ditambahkan.');window.location='index.php';</script>";

	}
}
 ?>



