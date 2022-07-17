<?php

include 'dataBase.php';

class ModelCliente extends BancoDeDados
{
  //operações do banco de dados
  public function create($nome, $sobre_nome, $telefone, $email, $endereco)
  {
    $stmt = $this->mysqli->prepare("INSERT INTO clientes (`nome`, `sobre_nome`, `telefone`, `email`, `endereco`) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $nome, $sobre_nome, $telefone, $email, $endereco);
    if ($stmt->execute() == TRUE) {
      return true;
    } else {
      return false;
    }
  }
  public function read()
  {
  }
  public function update()
  {
  }
  public function delete()
  {
  }
};
