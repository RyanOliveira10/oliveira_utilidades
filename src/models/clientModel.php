<?php
header("Access-Control-Allow-Origin: *");
include 'dataBase.php';

class ModelClient extends DataBase
{

  //operações do banco de dados
  public function create($fullName, $cpf, $email, $telephone, $city, $district, $road, $houseNumber)
  {
    $stmt = $this->mysqli->prepare("INSERT INTO clients (`fullName`, `cpf`, `email`, `telephone`, `city`, `district`, `road`, `houseNumber`) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss", $fullName, $cpf, $email, $telephone, $city, $district, $road, $houseNumber);
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
      return false;
    } else {
      return $array;
    }
    var_dump($result);
  }

  public function update($fullName, $cpf, $email, $telephone, $city, $district, $road, $houseNumber, $id)
  {
    $stmt = $this->mysqli->prepare("UPDATE `clients` SET `fullName` = ?, `cpf`=?, `email`=?, `telephone`=?,`city` = ?, `district` = ?, `road` = ?, `houseNumber` = ? WHERE `id` = ?");
    $stmt->bind_param("sisisssii", $fullName, $cpf, $email, $telephone, $city, $district, $road, $houseNumber, $id);

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
    $result = $this->mysqli->query("SELECT * FROM clients WHERE id='$id'");
    if ($result->num_rows == 1) {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      return $row;
    }
  }
};
