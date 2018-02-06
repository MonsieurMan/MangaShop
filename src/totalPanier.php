<?php 
    include('connection.php');

    $panier = array();

    if(isset($_COOKIE['lucas'])){
        $panier = unserialize($_COOKIE['lucas']);    
        $query = "select prix from Reference where idR=";
        $prix = 0;
        foreach($panier as $value){
            if($result = mysqli_query($link,$query.$value)){
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    $prix += $row['prix'];
                }
            }
        }
    
        
        mysqli_close($link);
    
        echo '<div class="montant">Montant du panier '.$prix.'€</div>';
    }
    else{
        echo '<div class="montant">Panier vide</div>';
    }


?>