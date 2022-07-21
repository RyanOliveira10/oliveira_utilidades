<?php

require_once '/xampp/htdocs/oliveira_utilidades/src/models/clientModel.php';

function readClients()
{
  $read = new ModelClient();
  $row = $read->read();

  if (empty($row)) {
    //echo "nenhum dado cadastrado";
  } else {
    foreach ($row as $value) {
      echo "<tr>";
      echo "<th>" . $value['id'] . "</th>";
      echo "<th>" . $value['fullName'] . "</th>";
      echo "<td>" . $value['cpf'] . "</td>";
      echo "<td>" . $value['email'] . "</td>";
      echo "<td>" . $value['telephone'] . "</td>";
      echo "<td>" . $value['city'] . "</td>";
      echo "<td>" . $value['district'] . "</td>";
      echo "<td>" . $value['road'] . "</td>";
      echo "<td>" . $value['houseNumber'] . "</td>";
      echo "<td><a class='btn btn-warning' href='editaClientes.php?id=" . $value['id'] . "'>Editar</a><a class='btn btn-danger' href='../../controllers/deleteClient.php?id=" . $value['id'] . "'>Excluir</a></td>";
      echo "</tr>";
    }
  }
};