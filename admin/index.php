<a style="float:right" href="logout.php">Logout</a>
<?php
// include '../config.php';

session_start();

if ($_SESSION['status'] != "login") {
    header("location:../index.php?pesan=belum_login");
}

echo "<h1 style='text-align:center'>Selamat datang ". $_SESSION['username'] . "</h1>";
?>

