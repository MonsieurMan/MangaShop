<?php
    include('../connection.php');

    $user='lucas';
    $id_param=$_GET['id'];
    /*unset($_COOKIE[$user]);
    $res = setcookie($user, '', time() - 3600);*/
    $query = $linkpdo->prepare("select * from Reference where idR= ? ;");
    $query->bindParam(1,$id_param);
    $query->execute();
    $row = $query->fetchAll();
    print_r($row);
    //$query = "select * from Reference where idR=".$id_param.";";
    //$result = mysqli_query($link,$query);
    //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $panier = array();
    $dedans = false;
    
    if(isset($_COOKIE[$user])){
        $panier = unserialize($_COOKIE[$user]);
        foreach($panier as $value){
            if($value == $id_param) $dedans = true;
            echo 'id : '.$value;
        }
    }

    if(!$dedans){
        array_push($panier,$row[0]['idR']);
        setcookie($user,serialize($panier),time()+(86400 * 30),'/');
    }

    //mysqli_free_result($result); 
    
    header('Location: ../../?rub=acheter');
?>
