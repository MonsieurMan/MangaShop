<?php
    $link = new mysqli("aragon","nd304367","nd304367","nd304367");
    if(mysqli_connect_errno()){
        printf('Echec de la connexion: %s\n"', mysqli_connect_error());
    }
?>