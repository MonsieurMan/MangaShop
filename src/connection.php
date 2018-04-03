<?php

   // $link = new mysqli("aragon","nd304367","nd304367","nd304367");
    try{
        $linkpdo = new PDO('mysql:dbname=shop;host=localhost', "lucas", "",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }
    catch(Exception $e){
        echo 'Erreur'.$e->getMessage().'<br/>';
        echo 'N° :'.$e->getCode();
    }

   /* if(mysqli_connect_errno()){
        printf('Echec de la connexion: %s\n"', mysqli_connect_error());
    }*/
?>