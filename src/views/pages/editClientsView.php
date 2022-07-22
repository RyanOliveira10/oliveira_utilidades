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
  <?php require_once("../../controllers/updateClient.php"); ?>

  <main class="container-fluid">
    <div class="link">
      <a href="../pages/readClientsView.php" class="btn btn-primary">Listar</a>
    </div>
    <form action="../../controllers/updateClient.php" method="POST">
    <div class="mb-3" style="display:none">
        <label for="formGroupExampleInput" class="form-label">Id</label>
        <input type="text" readonly name="id" class="form-control" placeholder="#" required value="<?php echo $result['id'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nome Completo</label>
        <input type="text" name="fullName" class="form-control" id="formGroupExampleInput" placeholder="João Silva Souza" required value="<?php echo $result['fullName'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Cpf</label>
        <input type="text" name="cpf" class="form-control" id="formGroupExampleInput2" placeholder="12345678900" required value="<?php echo $result['cpf'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="joaosilva123@gmail.com" required value="<?php echo $result['email'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Telefone</label>
        <input type="text" name="telephone" class="form-control" id="formGroupExampleInput2" placeholder="31975678930" required value="<?php echo $result['telephone'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Cidade</label>
        <input type="text" name="city" class="form-control" id="formGroupExampleInput2" placeholder="Antonio Dias" required value="<?php echo $result['city'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Bairro</label>
        <input type="text" name="district" class="form-control" id="formGroupExampleInput2" placeholder="Novo Centro" required value="<?php echo $result['district'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Rua</label>
        <input type="text" name="road" class="form-control" id="formGroupExampleInput2" placeholder="Vila Carvalho" required value="<?php echo $result['road'] ?>">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Número</label>
        <input type="text" name="houseNumber" class="form-control" id="formGroupExampleInput2" placeholder="1003" required value="<?php echo $result['houseNumber'] ?>">
      </div>
      <input type="submit" name="submit" onclick="validaFormulario()" class="btn btn-primary" value="Salvar alterações" />
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