<?php
    $link = new mysqli("localhost","root","coccinelle21!","shop");
    if(mysqli_connect_errno()){
        printf('Echec de la connexion: %s\n"', mysqli_connect_error());
    }
?>