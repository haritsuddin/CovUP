	<?php 
	session_start();
if(!isset($_SESSION['username'])){
    die("Anda belum login");
}
if($_SESSION['id_level']!="2"){
    die("Anda bukan dokter");
}
?>