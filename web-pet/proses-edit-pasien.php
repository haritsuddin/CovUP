<?php 
include "loginpetugas.php";
?>
<?php 
include '../koneksi.php';
if (isset($_POST['simpan'])){
	$id_pasien			= $_POST['id_pasien'];
	$nama 				= $_POST['nama'];
	$nohp 	 			= $_POST['nohp'];
	$email  				= $_POST['email'];
	$tgl_lahir     		= $_POST['tgl_lahir'];
	
	

	

	$sql = "UPDATE pasien SET nama='$nama',nohp='$nohp',email='$email',tgl_lahir='$tgl_lahir' WHERE id_pasien='$id_pasien'";

	$res = mysqli_query($kon,$sql);
	$count = mysqli_affected_rows($kon);

	if($count){
		 echo "<script>alert('data berhasil diubah.');window.location='index.php';</script>";
	}
}else{
	 echo "<script>alert('data berhasil diubah.');window.location='edit-pasien.php';</script>";
	}
if(isset($_POST["kembali"])){
	 echo "<script>alert('data berhasil diubah.');window.location='index.php';</script>";
	}

 ?>
