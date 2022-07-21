<!doctype html>
<html lang="pt-br">
<?php
session_cache_expire(30);
session_start();
//session_destroy();
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
  header('location:index.php');
  exit();
}

$logado = $_SESSION['email'];
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRM - Oliveira utilidades</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <?php include '../components/header.php' ?>
  <h1>Pagina Home</h1>

  <?php
    $name = $_SESSION['email'];
    echo "<h1> Bem vindo " . $name . " !</h1>";
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>