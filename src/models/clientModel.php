<?php
header("Access-Control-Allow-Origin: *");
include 'dataBase.php';

class ModelClient extends DataBase
{

  //atributos dos clientes
  /*private $nome;
  private $sobrenome;
  private $telefone;
  private $email;
  private $endereco;

  //metodos setters
  public function setNome($value)
  {
    $this->nome = $value;
  }
  public function setSobrenome($value)
  {
    $this->sobrenome = $value;
  }
  public function setTelefone($value)
  {
    $this->telefone = $value;
  }
  public function setEmail($value)
  {
    $this->email = $value;
  }
  public function setEndereco($value)
  {
    $this->endereco = $value;
  }

  //metodos getters
  public function getNome()
  {
    return $this->nome;
  }
  public function getSobrenome()
  {
    return $this->sobrenome;
  }
  public function getTelefone()
  {
    return $this->telefone;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function getEndereco()
  {
    return $this->endereco;
  }*/



  //operações do banco de dados
  public function create($fullName, $cpf, $email, $telephone, $city, $district, $road, $houseNumber)
  {
    $stmt = $this->mysqli->prepare("INSERT INTO clients (`fullName`, `cpf`, `email`, `telephone`, `city`, `district`, `road`, `houseNumber`) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss", $fullName, $cpf, $email, $telephone, $city, $district, $road, $houseNumber);
    /*$stmt->bind_param("sssss", $this->getNome($nome), $this->getSobre_nome($sobre_nome), $this->getTelefone($telefone), $this->getEmail($email), $this->getEndereco($endereco));*/
    if ($stmt->execute() == TRUE) {
      return true;
    } else {
      return false;
    }
  }

  public function read()
  {
    $result = $this->mysqli->query("SELECT * FROM clients");
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
      $array[] = $row;
    }
    if (empty($array)) {
      echo "Variavel vazia";
    } else {
      return $array;
    }
    var_dump($result);
  }
  public function update($nome, $sobrenome, $telefone, $email, $endereco)
  {
    $stmt = $this->mysqli->prepare("UPDATE `clientes` SET `nome` = ?, `sobrenome`=?, `telefone`=?, `email`=?,`endereco` = ? WHERE `nome` = ?");
    $stmt->bind_param("ssssss", $nome, $sobrenome, $telefone, $email, $endereco, $nome);

    //verifica se a condiçao é verdadeira
    if ($stmt->execute() == TRUE) {
      return true;
    } else {
      return false;
    }
  }
  public function delete($id)
  {
    if ($this->mysqli->query("DELETE FROM `clients` WHERE `id` = '" . $id . "';") == TRUE) {
      return true;
    } else {
      return false;
    }
  }

  public function readById($id)
  {
    $result = $this->mysqli->query("SELECT * FROM clientes WHERE id='$id'");
    if($result->num_rows==1){
      $row = $result->fetch_array(MYSQLI_ASSOC);
      return $row;
    }
  }
};
