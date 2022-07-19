<?php
session_start();
include('conexao.php');

if(empty($_POST['login']) || empty($_POST['senha'])) {
	header('Location: ../index.php');
	exit();
}

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT * FROM `usuarios` WHERE `login` = '$login' AND `senha` = '$senha' ";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['login'] = $login;
	header('Location: ../src/views/pages/home.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../index.php');
	exit();
}?>