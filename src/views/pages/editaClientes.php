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
    }

    main {
      margin: 3rem auto;
      background-color: #fff;
      max-width: 800px;
      padding: 2rem;
      border-radius: 10px;
      -webkit-box-shadow: 14px 16px 50px -11px rgba(143, 145, 168, 1);
      -moz-box-shadow: 14px 16px 50px -11px rgba(143, 145, 168, 1);
      box-shadow: 14px 16px 50px -11px rgba(143, 145, 168, 1);
    }

    .link {
      margin-bottom: 1rem;
      display: flex;
      justify-content: end;

    }

    form {
      margin: 0 auto;
      width: 80%;
    }
  </style>
</head>

<body>
  <?php include '../components/header.php' ?>
  <?php require_once("../../controllers/updateCliente.php");?>

  <main class="container-fluid">
    <div class="link">
      <a href="../pages/listaClientes.php" class="btn btn-primary">Listar</a>
    </div>
    <form action="../../controllers/updateCliente.php" method="POST">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="João Silva" required value="<?php ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control" id="formGroupExampleInput2" placeholder="Fagundes de oliveira" required>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Telefone</label>
        <input type="text" name="telefone" class="form-control" id="formGroupExampleInput2" placeholder="31975678930" required>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="joaosilva123@gmail.com" required>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="formGroupExampleInput2" placeholder="Antonio Dias" required>
      </div>
      <button type="submit" onclick="validaFormulario()" class="btn btn-primary">Salvar alterações</button>
    </form>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

<script>
  var input1 = document.getElementById("formGroupExampleInput");
  var input2 = document.getElementById("formGroupExampleInput2");

  function validaFormulario() {
    if (document.getElementById("formGroupExampleInput").value.length < 3 || (document.getElementById("formGroupExampleInput2").value.length < 3)) {
      alert('Por favor, preencha todos os campos');
      document.getElementById("formGroupExampleInput").focus();
      return false
    }
  }
</script>

</html>