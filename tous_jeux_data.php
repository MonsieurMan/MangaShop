<?php
    echo "data";
    
    include("connection.php");

    $query_t = "CREATE TABLE IF NOT EXISTS Version (idV mediumint not null auto_increment, nomV varchar(40), primary key(idV));";
    if(mysqli_query($link, $query_t) === TRUE){
        printf('Table creee');
    } 

    $query_t = "CREATE TABLE IF NOT EXISTS Reference (idR mediumint not null auto_increment, idV mediumint not null, titre varchar(40), categorie numeric, nbPage numeric, auteur varchar(40),prix numeric, primary key(idR,idV) , foreign key(idV) references Version(idV));";
    if(mysqli_query($link, $query_t) === TRUE){
        printf('Table creee');
    } 

    $query_t = "CREATE TABLE IF NOT EXISTS User (idU mediumint not null auto_increment, login varchar(40), password varchar(40), mail varchar(40), primary key(idU));";
    if(mysqli_query($link, $query_t) === TRUE){
        printf('Table creee');
    } 

    $query_t = "CREATE TABLE IF NOT EXISTS Panier ( idU mediumint not null, idR mediumint not null, primary key(idR,idU), foreign key(idR) references Reference(idR), foreign key(idU) references User(idU));";
    if(mysqli_query($link, $query_t) === TRUE){
        printf('Table creee');
    } 

    $query_t = "CREATE TABLE IF NOT EXISTS Commande (idC mediumint not null auto_increment, idU mediumint not null, primary key(idC,idU), foreign key(idU) references User(idU));";
    if(mysqli_query($link, $query_t) === TRUE){
        printf('Table creee');
    } 

    $query_t = "CREATE TABLE IF NOT EXISTS CommandeReference (idC mediumint not null, idR mediumint not null, primary key(idC,idR), foreign key(idR) references Reference(idR), foreign key(idC) references Commande(idC));";
    if(mysqli_query($link, $query_t) === TRUE){
        printf('Table creee');
    } 

?>
