<?php
session_start();
?>

<!doctype html>
  <html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faça Login - Oliveira Utilidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

  </head>

  <style>
    body {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      background-color: gray;
      display: flex;
    }

    .content {
      margin: 5rem auto;
      max-width: 600px;
      background-color: #fff;
      padding: 2rem;
    }

    .submit {
      display: flex;
      margin-top: 2rem;
      gap: 2rem;
      align-items: center;
    }

    .inputEye {
      display: flex;
      gap: 7px;
      justify-content: center;
      align-items: center;
    }

    .lnr-eye {
      cursor: pointer;
    }
  </style>

  <body>
    <div class="container-fluid content">
      <?php
      if (isset($_SESSION['nao_autenticado'])) :
        ?>
        <div class="alert alert-danger" role="alert">
          <p>Email ou senha incorretos!</p>
        </div>
        <?php
      endif;
      unset($_SESSION['nao_autenticado']);
      ?>

      <form method="POST" action="./login/login.php" id="form">
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <div class="inputEye">
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <span class="lnr lnr-eye" style="opacity: 0;"></span>
          </div>
        </div>
        <div id="validaLogin"></div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <div class="inputEye">
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            <span id="eye" class="lnr lnr-eye"></span>
          </div>
        </div>
        <div id="validaSenha"></div>
        <div class="submit">
          <input type="submit" class="btn btn-primary" onclick="return valida()" value="Logar" name="submit" id="submit" />
          <a href="#" class="text-danger">Esqueci email ou senha</a>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    

    /*código javascript para validação de login*/
    <script language="javascript" type="text/javascript">
      let form = document.getElementById("form");
      let validaSenha = document.getElementById("validaSenha");
      let validaLogin = document.getElementById("validaLogin");
      const btn = document.getElementById("eye");


      btn.addEventListener("click", () => {
        var input = document.getElementById("exampleInputPassword1");
        if (input.getAttribute('type') == 'password') {
          input.setAttribute('type', 'text');
        } else {
          input.setAttribute('type', 'password');
        }
      });

      function valida() {
        var login = form.email.value;
        var senha = form.password.value;

        if (login == "") {
          validaLogin.innerHTML = "<p class='text-danger'>Preencha o campo com o seu login</p>"
          form.login.focus();
          return false;
        } else {
          validaLogin.innerHTML = "";
        }

        if (senha == "") {
          validaSenha.innerHTML = "<p class='text-danger'>Preencha o campo com o sua senha</p>"
          form.senha.focus();
          return false;
        } else {
          validaSenha.innerHTML = "";
        }
        if (senha.length < 6 || senha.length > 6) {
          validaSenha.innerHTML = "<p class='text-danger'>A senha deve possuir 6 números</p>"
          form.senha.focus();
          return false;
        } else {
          validaSenha.innerHTML = "";
        }
      }
    </script>
  </body>

  </html>