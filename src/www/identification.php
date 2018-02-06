<?php
include('src/connection.php');
if(isset($_POST['identifiant']) && isset($_POST['motdepasse'])){
    echo $_POST['motdepasse'];
    $query = "select * from User where login = '".$_POST['identifiant']."' and password = '".$_POST['motdepasse']."'";
    echo $query;
    if($res = mysqli_query($link,$query)){
        $num_row = mysqli_num_rows($res);
        if( $num_row == 1 ) {
            $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
            echo 'true';
            $_SESSION['idUser'] = $row['idU'];
            $_SESSION['login'] = true;
         }
        else {
            $_SESSION['login'] = false;
        }
    }

}
else{
    echo "No isset";
    
}


?>