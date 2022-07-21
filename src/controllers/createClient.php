<?php

require_once '../models/clientModel.php';

function insertClients()
{
  $insert = new ModelClient();
  $insert->create(
    $_POST['fullName'],
    $_POST['cpf'],
    $_POST['email'],
    $_POST['telephone'],
    $_POST['city'],
    $_POST['district'],
    $_POST['road'],
    $_POST['houseNumber'],
  );

  echo "<script>alert('Registro incluído com sucesso!');document.location='../views/pages/insertClientsView.php'</script>";
}

insertClients();