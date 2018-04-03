<?php 
    include('connection.php'); 
    session_start();
    if(mysqli_connect_errno()){
        printf('Echec de la connexion: %s\n"', mysqli_connect_error());
    }

    if (isset($_POST["titre"]) 
        && isset($_POST["auteur"]) 
        && isset($_POST["nbPage"]) 
        && isset($_POST["prix"]) 
        && isset($_POST["version"]) 
        && isset($_POST["categorie"])) {
        $query = $linkpdo->prepare("INSERT INTO Reference (idV,titre,categorie,nbPage,auteur,prix,idU) values (?,?,?,?,?,?,?)");
        $query->bindParam(1,$_POST['version']);
        $query->bindParam(2,($_POST['titre']));
        $query->bindParam(3,($_POST['categorie']));
        $query->bindParam(4,($_POST['nbPage']));
        $query->bindParam(5,($_POST['auteur']));
        $query->bindParam(6,($_POST['prix']));
        $idUser = $_SESSION['idUser'];
        $query->bindParam(7,$idUser);
        try
        {
            $res = $query->execute();
            echo $idRef. " id user : " . $idUser;
            if($res) {
                $_SESSION['ajoute'] = true;
            }
            else {
                $_SESSION['ajoute'] = false;
            }
            header('Location: ../?rub=vendre');
        }
        catch(PDOExecption $e)
        {
            $linkpdo->rollback();
            print "Error!: " . $e->getMessage() . "</br>";
        }
        //$query = "INSERT INTO Reference (idV,titre,categorie,nbPage,auteur,prix) values (".$_POST["version"].",'". $_POST["titre"]."','". $_POST["categorie"]."',". $_POST["nbPage"].",'". $_POST["auteur"]."',".$_POST["prix"].");";
        //echo $query;
        //mysqli_query($link,$query) ;//OR die (header('Location: ../?rub=vendre'));
    }
    
    //mysqli_close($link);
?>