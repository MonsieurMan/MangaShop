<?php 
    include('connection.php'); 
    
    include('connection.css');

    if(mysqli_connect_errno()){
        printf('Echec de la connexion: %s\n"', mysqli_connect_error());
    }

    $query = "select * from references order by idR";
    $div = "";
    
    if($result = mysqli_query($link,$query)){
        while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
            $div = "<div>".$row["idR"]."</div>";
        }
        mysqli_free_result($result);
    }

    mysqli_close($link);

    echo $div;
?>