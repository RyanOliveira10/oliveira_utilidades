<?php
require_once("/xampp/htdocs/oliveira_utilidades/src/models/clientesModel.php");

function deletaClientes($id)
{
    $deletar = new ModelCliente();
    if ($deletar->delete($id) == TRUE) {
        echo "<script>alert('Registro deletado com sucesso!');document.location='../views/pages/listaClientes.php'</script>";
    } else {
        echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
    }
}

deletaClientes($_GET['id']);
