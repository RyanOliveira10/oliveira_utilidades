<?php

include_once '../init.php';

class BancoDeDados
{
  protected $mysqli;

  private function conexao()
  {
    $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
  }

  public function __construct()
  {
    $this->conexao();
  }
}
