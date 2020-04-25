<?php 
session_start();

include "../koneksi.php";
if(isset($_POST['simpan'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_level = 2;

	$sql = "INSERT INTO login (username, password, id_level)
			VALUES ('$username','$password',$id_level)";

	$res = mysqli_query($kon,$sql);

	$count = mysqli_affected_rows($kon);

	
	if($res>0){
echo "<script>alert('sign up berhasil.');window.location='login.php';</script>";

	}
}
 ?>

 