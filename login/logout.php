<?php
session_start();
session_destroy();
header('Location: ../index.php');
echo "<script> window.confirm('voçê realmente deseja sair?') </script>";
exit();
?>