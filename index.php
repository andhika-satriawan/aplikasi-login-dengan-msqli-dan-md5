<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi login dengan PHP dan MySQL</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>

<?php 
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
      echo "Login gagal! Username dan Password salah!";
    } elseif ($_GET['pesan'] == "logout") {
      echo "Anda telah berhasil logout";
    } elseif ($_GET['pesan'] == "belum_login") {
      echo "Anda harus login untuk mengakses halaman Admin";
    }
  }
?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h3>Form Login</h2>
    </div>

    <!-- Login Form -->
    <form action="login.php" method="POST">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

  </div>
</div>
</body>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>