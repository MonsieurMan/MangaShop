<?php
    include('../connection.php');
    session_start();
    $user='lucas';
    $id_param=$_GET['id'];

    $query = $linkpdo->prepare("select * from Reference where idR= ? ;");
    $query->bindParam(1,$id_param);
    $query->execute();
    $row = $query->fetchAll();

    $panier = array();
    $dedans = false;
    
    if(isset($_COOKIE[$user])){
        $panier = unserialize($_COOKIE[$user]);
        foreach($panier as $value){
            if($value === $id_param) $dedans = true;
        }
    }

    if(!$dedans){
        $query = $linkpdo->prepare('insert into Panier(idR,idU) values(?,?)');
        $idU = $_SESSION['idUser'];
        $query->bindParam(1, $id_param);
        $query->bindParam(2, $idU);
        try
        {
            $query->execute();
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        array_push($panier,$row[0]['idR']);
        setcookie($user,serialize($panier),time()+(1000 * 30),'/');
    }

    //mysqli_free_result($result); 
    
    header('Location: ../../?rub=acheter');
?>
