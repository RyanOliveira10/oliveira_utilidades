<html>

<style>
  .menu{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    width: 100%;
  }

  .menu a{
    margin: 1rem;
  }
</style>

<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <div class="menu">
      <a href="#" class="btn btn-success">Cadastrar Produtos</a>
      <a href="../pages/cadastroClientes.php" class="btn btn-primary">Cadastrar Clientes</a>
      <a href="#" class="btn btn-danger">Cadastrar Fornecedores</a>
      <a href="#" class="btn btn-warning">Listar Produtos</a>
      <a href="../pages/listaClientes.php" class="btn btn-info">Listar Clientes</a>
      <a href="#" class="btn btn-secondary">Listar Fornecedores</a>
      <a href="../pages/home.php" class="btn btn-light">Página inicial</a>
      <a href="../../../realizaLogout.php" class="btn" style="background-color: orange;">Sair da Sessão</a>
    </div>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

</html>