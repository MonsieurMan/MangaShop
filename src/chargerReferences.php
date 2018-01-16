<?php 
    include('connection.php'); 
    if(mysqli_connect_errno()){
        printf('Echec de la connexion: %s\n"', mysqli_connect_error());
    }

    $query = "select * from reference order by id";
    $div = "";
    
    if($result = mysqli_query($link,$query)){
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $div = "<div class='item' >"
            ."<figure class='figure'>"
            ."<img class='image' src='src/assets/images/manga.jpg' />"
            ."<a class='a' href='#'></a>"
            ."</figure>"
            ."<p class='title'>".$row["titre"]."</p>"
            ."<p class='auteur'>".$row["auteur"]."</p>"
            ."<p class='prix'>".$row["prix"]."€</p>"
            ."<div class='panier_div'>"
            ."<button class='panier_button'>Ajouter au panier</button>"
            ."<i class='material-icons panier_icon'>add_shopping_cart</i>"
            ."</div>"
            ."</div>";
        }
        mysqli_free_result($result);
    }
    
    mysqli_close($link);

    echo $div;
?>