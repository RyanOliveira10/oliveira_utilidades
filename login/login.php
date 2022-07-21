<?php
session_start();
include('conect.php');

if(empty($_POST['email']) || empty($_POST['password'])) {
	header('Location: ../index.php');
	exit();
}

$email = mysqli_real_escape_string($conection, $_POST['email']);
$password = mysqli_real_escape_string($conection, $_POST['password']);

$query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' ";

$result = mysqli_query($conection, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: ../src/views/pages/home.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../index.php');
	exit();
}?>