<?php 
    include('connection.php');

    $panier = array();

    if(isset($_COOKIE['lucas'])){
        $panier = unserialize($_COOKIE['lucas']);    

        $prix = 0;
        foreach($panier as $value){
            $query = $linkpdo->prepare("select prix from Reference where idR= ?");
            $query->bindParam(1,$value);
            $query->execute();
                while($row = $query->fetch()){
                    $prix += $row['prix'];
                }
        }
    
        echo '<div class="montant">Montant du panier '.$prix.'€</div>';
    }
    else{
        echo '<div class="montant">Panier vide</div>';
    }


?>