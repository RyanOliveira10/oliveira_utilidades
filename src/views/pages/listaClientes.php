<?php require_once '../../controllers/readCliente.php' ?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRM - Realizar cadastro de cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <style>

    body{
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      background-color: gray;
    }
    .content {
      max-width: 90%;
      display: flex;
      flex-direction: column;
      margin: 3rem auto;
      background-color: #fff;
      padding: 1rem;
    }

    .link {
      display: flex;
      justify-content: end;
      margin-bottom: 1rem;
    }

    .rTable {
      width: 100%;
      text-align: center;
    }

    .rTable thead {
      background: black;
      font-weight: bold;
      color: #fff;
    }

    .rTable tbody tr:nth-child(2n) {
      background: #ccc;
    }

    .rTable th,
    .rTable td {
      padding: 2px 2px;
    }

    .rTable td a{
      margin: 5px;
    }

    @media screen and (max-width: 690px) {
      .content {
        width: 94%;
      }

      .rTable thead {
        display: none;
      }

      .rTable tbody td {
        display: flex;
        flex-direction: column;
      }
    }

    @media only screen and (min-width: 1200px) {
      .content {
        width: 100%;
      }

      .rTable tbody tr td:nth-child(1) {
        width: 10%;
      }

      .rTable tbody tr td:nth-child(2) {
        width: 30%;
      }

      .rTable tbody tr td:nth-child(3) {
        width: 20%;
      }

      .rTable tbody tr td:nth-child(4) {
        width: 10%;
      }

      .rTable tbody tr td:nth-child(5) {
        width: 30%;
      }
    }
  </style>
</head>

<body>
  <?php include '../components/header.php' ?>

  <main class="container-fluid content">
    <div class="link">
      <a href="../pages/cadastroClientes.php" class="btn btn-primary">Cadastrar</a>
    </div>
    <table class="rTable">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Endereco</th>
          <th>Opções</th>
        </tr>
      </thead>

      <tbody>
        <?php listaClientes() ?>
      </tbody>
    </table>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>