<html>

<style>
  .menu{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  }

  .menu a{
    margin: 1rem;
  }
</style>

<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <div class="menu">
      <a href="../pages/cadastro.php" class="btn btn-success">Cadastrar Produtos</a>
      <a href="#" class="btn btn-primary">Cadastrar Clientes</a>
      <a href="#" class="btn btn-danger">Cadastrar Fornecedores</a>
      <a href="#" class="btn btn-warning">Listar Produtos</a>
      <a href="#" class="btn btn-info">Listar Clientes</a>
      <a href="#" class="btn btn-secondary">Listar Fornecedores</a>
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