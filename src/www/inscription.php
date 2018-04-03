<?php
    include('src/connection.php');
    echo 'TESSSST2';
    if(isset($_POST['identifiant']) && isset($_POST['motdepasse']) && isset($_POST['courriel'])){
        echo 'TESSSST';
        //$query_u = "select * from User where login = '".$_POST['identifiant']."' or mail = '".$_POST['courriel']."'";
        $query = $linkpdo->prepare("select * from User where login = ? or mail = ?");
        $query->bindParam(1,$_POST['identifiant']);
        $query->bindParam(2,($_POST['courriel']));
        $query->execute();
        $res = $query->fetchAll();
        if(count($res === 0)){
            $query = $linkpdo->prepare("INSERT INTO User (login, password, mail) VALUES (?,?,?)");
            $query->bindParam(1,$_POST['identifiant']);
            $query->bindParam(2,hash('sha256',$_POST['motdepasse']));
            $query->bindParam(3,($_POST['courriel']));
            $query->execute();
            $res = $query->fetchAll();
            print_r($res);
                echo "it's ok !";
                header('Location: ?rub=accueil');
        }else{
            echo' existe déja';
            header('Location: ?rub=login');

        }
        /*
        if($res = mysqli_query($link,$query_u)){
            $num_row = mysqli_num_rows($res);
            if( $num_row == 0 ) {
                $query = "INSERT INTO User (login, password, mail) VALUES (?,?,?)";
                echo $query;
                if(mysqli_query($link, $query)){
                    echo "it's ok !";
                    header('Location: ?rub= accueil');
                }   
            } else {
                echo' existe déja';
                header('Location: ?rub= login');
            }
        
        } 

    */
    }
    else{
        echo "No isset";
        
    }
    
?>