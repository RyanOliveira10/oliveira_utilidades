<?php
require_once("/xampp/htdocs/oliveira_utilidades/src/models/clientModel.php");

function deleteClients($id)
{
    $delete_client = new ModelClient();
    if ($delete_client->delete($id) == TRUE) {
        echo "<script>alert('Registro deletado com sucesso!');document.location='../views/pages/readClientsView.php'</script>";
    } else {
        echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
    }
}

deleteClients($_GET['id']);
