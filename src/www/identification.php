<?php
include('src/connection.php');
if(isset($_POST['identifiant']) && isset($_POST['motdepasse'])){
    //$query = "select * from User where login = '".$_POST['identifiant']."' and password = '".hash('sha256',$_POST['motdepasse'])."'";
    $query = $linkpdo->prepare("select * from User where login = ? and password = ?");
    $query->bindParam(1,$_POST['identifiant']);
    $pass = hash('sha256',$_POST['motdepasse']);
    $query->bindParam(2,$pass);
    $query->execute();
    $res = $query->fetchAll();
    if(count($res) === 1){
        $_SESSION['idUser'] = $res[0]['idU'];
        $_SESSION['login'] = true;
        header('Location: /?rub=marche');
    }else{
        $_SESSION['login'] = false;
    }

    /*if($res = mysqli_query($link,$query)){
        $num_row = mysqli_num_rows($res);
        if( $num_row == 1 ) {
            $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
            echo 'true';
            $_SESSION['idUser'] = $row['idU'];
            $_SESSION['login'] = true;
         }
        else {
            $_SESSION['login'] = false;
        }
    }*/

}
else{
    echo "No isset";
    
}


?>