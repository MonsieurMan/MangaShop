<?php 
    include('connection.php'); 
    
    if(mysqli_connect_errno()){
        printf('Echec de la connexion: %s\n"', mysqli_connect_error());
    }

    if (isset($_POST["titre"]) 
        && isset($_POST["auteur"]) 
        && isset($_POST["nbPage"]) 
        && isset($_POST["prix"]) 
        && isset($_POST["version"]) 
        && isset($_POST["categorie"])) {
        $query = "INSERT INTO Reference (idV,titre,categorie,nbPage,auteur,prix) values (".$_POST["version"].",'". $_POST["titre"]."','". $_POST["categorie"]."',". $_POST["nbPage"].",'". $_POST["auteur"]."',".$_POST["prix"].");";
        echo $query;
        mysqli_query($link,$query);
    }

    mysqli_close($link);
?>