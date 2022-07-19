<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Faça Login - Oliveira Utilidades</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<style>

  body{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    background-color: gray;
    display: flex;
  }

  .content{
    margin: 5rem auto;
    max-width: 600px;
    background-color: #fff;
    padding: 2rem;
  }

  .submit{
    display: flex;
    margin-top: 2rem;
    gap: 2rem;
    align-items: center;
  }
</style>

<body>
  <div class="container-fluid content">

    <p>usuario: admin</p>
    <p>senha: 123456</p>

    <form method="POST" action="verificaLogin.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="submit">
        <input type="submit" class="btn btn-primary" value="Logar" name="submit"/>
        <a href="#" class="text-danger">Esqueci usuário ou senha</a>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>