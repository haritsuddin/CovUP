<?php 
include '../koneksi.php';
if (isset($_POST['simpan'])){

	$nama = $_POST['nama'];
	$nohp = $_POST['nohp'];
	$email = $_POST['email'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$id_level = 2;

	$sql = "INSERT INTO pasien
			VALUES ('','$nama','$nohp','$email','$tgl_lahir',$id_level)";

	$res = mysqli_query($kon,$sql);

	$count = mysqli_affected_rows($kon);

	
	if($res>0){
echo "<script>alert('data berhasil ditambahkan.');window.location='index.php';</script>";

	}
}
 ?>



