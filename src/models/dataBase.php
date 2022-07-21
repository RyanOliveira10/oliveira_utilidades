<?php

require_once '/xampp/htdocs/oliveira_utilidades/src/init.php';

class DataBase
{
  protected $mysqli;

  private function conection()
  {
    $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
  }

  public function __construct()
  {
    $this->conection();
  }
}
