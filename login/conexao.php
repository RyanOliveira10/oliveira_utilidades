<?php

define('HOST', 'localhost');
define('DBNAME', 'oliveira_utilidades');
define('USER', 'root');
define('PASSWORD', '');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die("falha ao conectar com o banco de dados");