<?php

require_once 'verificaLogin.php';
session_destroy();

if(isset($_SESSION["login"])){
  unset($_SESSION["login"]);
  header('location:index.php');
}