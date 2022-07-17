<?php

require_once '../models/clientesModel.php';

function insereClientes()
{
  $cadastro = new ModelCliente();
  $cadastro->create(
    $_POST['nome'],
    $_POST['sobrenome'],
    $_POST['telefone'],
    $_POST['email'],
    $_POST['endereco']
  );

  echo "<script>alert('Registro incluído com sucesso!');document.location='../views/pages/cadastroClientes.php'</script>";
}

insereClientes();