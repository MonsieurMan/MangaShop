<?php 
    include('connection.php'); 
    if(mysqli_connect_errno()){
        printf('Echec de la connexion: %s\n"', mysqli_connect_error());
    }

    $query = "select * from Reference order by idR";
    $div = "";
    
    if($result = mysqli_query($link,$query)){
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $div = "<div>".$row["idR"]."</div>";
        }
        mysqli_free_result($result);
    }

    mysqli_close($link);

    echo $div;
?>