<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['id_level']);
session_destroy();
    header("Location:../web-sehat/index.php");
?>