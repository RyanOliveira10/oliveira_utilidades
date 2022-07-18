<?php require_once '../../controllers/readCliente.php' ?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRM - Realizar cadastro de cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    body {
      background-color: gray;
      width: 100%;
      height: 100vh;
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      padding-bottom: 3rem;
    }

    main {
      margin: 3rem auto;
      background-color: #fff;
      max-width: 90%;
      padding: 2rem;
      border-radius: 10px;
      -webkit-box-shadow: 14px 16px 50px -11px rgba(143, 145, 168, 1);
      -moz-box-shadow: 14px 16px 50px -11px rgba(143, 145, 168, 1);
      box-shadow: 14px 16px 50px -11px rgba(143, 145, 168, 1);
      margin-bottom: 2rem;
    }

    .link {
      margin-bottom: 1rem;
      display: flex;
      justify-content: end;

    }

    table {
      width: 100%;
      word-wrap: break-word;
      margin-bottom: 2rem;
    }

    table a{
      margin: 5px;
    }
  </style>
</head>

<body>
  <?php include '../components/header.php' ?>

  <main class="container-fluid">
    <div class="link">
      <a href="../pages/cadastroClientes.php" class="btn btn-primary">Cadastrar</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Sobrenome</th>
          <th scope="col">Telefone</th>
          <th scope="col">Email</th>
          <th scope="col">Endereço</th>
          <th scope="col">Opções</th>
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