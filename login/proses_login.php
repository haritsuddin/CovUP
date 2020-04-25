<?php
session_start();
include "../koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];
if($op=="in"){
    $sql = mysqli_query($kon,"SELECT * FROM login WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $qry = mysqli_fetch_array($sql);
        $_SESSION['username'] = $qry['username'];
        $_SESSION['id_level'] = $qry['id_level'];
        if($qry['id_level']=="1"){
            echo "<script>alert('berhasil.');window.location='../web-pet/index.php';</script>";
        }
        else if($qry['id_level']=="2"){
            echo "<script>alert('berhasil.');window.location='../web-kar/index.php';</script>";
        }
    }else{
        ?>
        echo "<script>alert('email/password salah');window.location='login.php';</script>";
        <?php
    }
}else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['id_level']);
    echo "<script>alert('berhasil.');window.location='login.php';</script>";
}
?>