<?php 
include "loginpetugas.php";
?>
<?php 
include'../koneksi.php';
$id_pasien = $_GET['id_pasien'];

 $query=mysqli_query($kon,"DELETE FROM pasien WHERE id_pasien='$id_pasien'");

 echo "<script>alert('data berhasil dihapus.');window.location='index.php';</script>";


 ?>