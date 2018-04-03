<?php
include('src/connection.php');
if(isset($_POST['identifiant']) && isset($_POST['motdepasse'])){
    $query = $linkpdo->prepare("select * from User where login = ? and password = ?");
    $query->bindParam(1,$_POST['identifiant']);
    $pass = hash('sha256',$_POST['motdepasse']);
    $query->bindParam(2,$pass);
    $query->execute();
    $res = $query->fetchAll();
    if(count($res) === 1){
        $_SESSION['idUser'] = $res[0]['idU'];
        $_SESSION['login'] = true;
        echo 'Logged';
    }else{
        $_SESSION['login'] = false;
        echo 'Error';
    }

}
else{
    echo "No isset";
    
}


?>