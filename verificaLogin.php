<?php
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];

$host = "localhost";
$dbname = "oliveira_utilidades";
$user = "root";
$password = "";

//cria a conexao
$conn = new mysqli($host, $user, $password);

//checa a conexao
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//seleciona o banco de dados
if ($result = $conn->query("SELECT DATABASE()")) {
  $row = $result->fetch_row();
  echo "Default database is " . $row[0];
}
$result = $conn->select_db("oliveira_utilidades") or die("Sem acesso ao DB, Entre em
contato com o Administrador, ryan.junio.developer@gmail.com");

//verifica dados no banco de dados
if ($result = $conn->query("SELECT * FROM `usuarios` WHERE `login` = '$login' AND `senha` = '$senha' ")) {
  echo "Returned rows are: " . $result->num_rows;
  //$result->free_result();
}

if (mysqli_num_rows($result) > 0) {
  $_SESSION['login'] = $login;
  $_SESSION['senha'] = $senha;
  //header('location: ./src/views/pages/home.php');
  echo"<script language='javascript' type='text/javascript'>
          window.location.href='./src/views/pages/home.php'</script>";
} else {
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  //header('location:index.php');
  echo"<script language='javascript' type='text/javascript'>
          window.location.href='index.php'</script>";
}
