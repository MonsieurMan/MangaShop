<?php
    include("src/connection.php");
    $query = "select * from Reference where idR =".$_GET['id'].";";
    echo $query;
    $result = mysqli_query($link,$query);
    $res = mysqli_fetch_array($result,MYSQLI_ASSOC);
            echo "<div class='titre_prod'> <a class='titreD'><span id='orange'> Description du produit n°</span><span id='bleu'>".$res['idR']."</span></a></div>"
            ."<div class='detail'>"
            
            

            ."<div class='detail_item'>"
            ."<div class='img_conteneur'>"
            ."<img class='img_detail' src='src/assets/images/manga.jpg' />"
            ."</div>"
            ."<div class='description'>"
            ."<div class='desc_line'><a class='titreD'><span id='bleu'>Titre :</span> <span id='orange'>".$res["titre"]."</span></a></div>"
            ."<div class='desc_line'><a class='auteurD'><span id='bleu'>Auteur :</span> <span id='orange'>".$res["auteur"]."</span></div>"
            ."<div class='desc_line'><a class='auteurD'><span id='bleu'>Catégorie :</span> <span id='orange'>".$res["categorie"]."</span></div>"
            ."<div class='desc_line'><a class='auteurD'><span id='bleu'>nbPage :</span> <span id='orange'>".$res["nbPage"]."</span></div>"
            ."<div class='desc_line'><a class='auteurD'><span id='bleu'>Prix :</span> <span id='orange'>".$res["prix"]." €</span></div>"
        ."</div></div></div>";
        mysqli_free_result($result);
    mysqli_close($link);


?>