<?php

define('HOST','us-cdbr-east-06.cleardb.net');
define('USER','bc0abaf7122c3e');
define('PASSWORD','a8e5bc59');
define('DBNAME','heroku_8392ddd966da631');

$conection = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die("falha ao conectar com o banco de dados");
