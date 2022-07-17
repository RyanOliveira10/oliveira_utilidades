<?php
require_once("../models/clientesModel.php");

function insereDados()
{
  $cadastro = new ModelCliente();
  $cadastro->create($_POST['nome'], $_POST['sobre_nome'], $_POST['telefone'], $_POST['email'], $_POST['endereco']);
}

$result = insereDados();
echo "<script>alert('Registro incluído com sucesso!');document.location='../views/cadastroCliente.php'</script>";