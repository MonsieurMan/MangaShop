<div style="padding-top:100px">
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'GET') header('Location: ?rub=paramRecherche');
        include('src/connection.php');

        $first = true;
        $query = '';
        foreach($_POST as $key=>$value){
            if($value != ''){
                if($first){
                    if(is_string($value))
                        $query = $query." where $key like '%$value%'";
                    else
                        $query = $query." where $key=$value";
                    $first = false;
                }else{
                    if(intval($value))
                        $query = $query." and $key <= $value";
                    else
                        $query = $query." and $key like '%$value%'";
                }
            }
        }

        $query = $linkpdo->prepare("select * from Reference" . $query);
        $query->execute();
        while($row = $query->fetch()){
            echo '<div style="width:200px;margin:auto;">' .
                    '<p>Titre : ' . $row["titre"] . '</p>' .
                    '<p>Prix : ' . $row['prix'] . ' €</p>' .
                    '<p>Auteur : ' . $row['auteur'] . '</p>' .
                '</div>';
        }
    ?>
</div>