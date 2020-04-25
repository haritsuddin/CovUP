<?php 
include "loginpetugas.php";
?>
<?php 
include'../koneksi.php';
$id_karantina = $_GET['id_karantina'];

 $query=mysqli_query($kon,"DELETE FROM karantina WHERE id_karantina='$id_karantina'");

 echo "<script>alert('data berhasil dihapus.');window.location='index.php';</script>";


 ?>