	<?php 
include "loginpetugas.php";
?>
<?php 
include '../koneksi.php';

if (isset($_POST['simpan'])){

	$id_karantina = $_POST['id_karantina'];
	$suhu = $_POST['suhu'];
	$tgl_cek = $_POST['tgl_cek'];
	$keadaan = $_POST['keadaan'];


$sql = "UPDATE karantina SET suhu='$suhu',tgl_cek='$tgl_cek',keadaan='$keadaan' WHERE id_karantina='$id_karantina'";

	$res = mysqli_query($kon,$sql);	

	$count = mysqli_affected_rows($kon);

	var_dump($res);
	if($res>0){


    echo "<script>alert('data berhasil ditambahkan.');window.location='index.php';</script>";

	}
}
 ?>
