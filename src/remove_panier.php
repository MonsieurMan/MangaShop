<?php
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    session_start();
    if ($_SESSION['login']) {
        $idU = $_SESSION['idUser'];
        $idR = $_POST['idRef'];
        require('connection.php');
        $query = $linkpdo->prepare('Delete from Panier where idR = ? and idU = ?');
        $query->bindParam(1,$idR);
        $query->bindParam(2, $idU);
        try
        {
            $query->execute();
        }
        catch(PDOException $e)
        {
            return $e->getMessage();
        }
    }
}