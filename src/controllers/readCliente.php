<?php

require_once '/xampp/htdocs/oliveira_utilidades/src/models/clientesModel.php';

function listaClientes()
{
  $listar = new ModelCliente();
  $row = $listar->read();

  if (empty($row)) {
    //echo "nenhum dado cadastrado";
  } else {
    foreach ($row as $value) {
      echo "<tr>";
      echo "<th>" . $value['id'] . "</th>";
      echo "<th>" . $value['nome'] . "</th>";
      echo "<td>" . $value['sobrenome'] . "</td>";
      echo "<td>" . $value['telefone'] . "</td>";
      echo "<td>" . $value['email'] . "</td>";
      echo "<td>" . $value['endereco'] . "</td>";
      echo "<td><a class='btn btn-warning' href='editaClientes.php?id=" . $value['id'] . "'>Editar</a><a class='btn btn-danger' href='../../controllers/deleteCliente.php?id=" . $value['id'] . "'>Excluir</a></td>";
      echo "</tr>";
    }
  }
};