<?php
require_once '/xampp/htdocs/oliveira_utilidades/src/models/clientModel.php';

$obj = new ModelCliente();

if (isset($_POST['submit'])) {
  $obj->update(
    $_POST['nome'],
    $_POST['sobrenome'],
    $_POST['telefone'],
    $_POST['email'],
    $_POST['endereco']
  );
  echo "<script>window.location.href = 'http://localhost/oliveira_utilidades/src/views/pages/listaClientes.php';
  alert('registro editado com sucesso');
  </script>";
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $edita = $obj->readById($id);
  //print_r($edita);
}











/*require_once '/xampp/htdocs/oliveira_utilidades/src/models/clientesModel.php';

$edita = new ModelCliente();

if (!empty($_GET['id'])) {
  $id = $_GET['id'];
  $edita->pesquisaCliente($id);
  //print_r($edita);

  if ($edita->num_rows > 0) {
    while ($cliente_data = mysqli_fetch_assoc($result)) {
      $nome = $edita['nome'];
      $sobrenome = $edita['sobrenome'];
      $telefone = $edita['telefone'];
      $email = $edita['email'];
      $endereco = $edita['endereco'];
    }
    print_r($nome);
  } else {
    header("Location : ../views/pages/editaClientes.php");
  }
}*/
