
    <?php
        include('src/connection.php');
        $menu = "";
        $first = true;

        $query = $linkpdo->prepare("select * from menu where parent is NULL");
        $query->execute();
            while($row = $query->fetch()){
                $menu = $menu.'<div class="dropdown"><a class="dropbtn" href="?rub='.strtolower(str_replace("é","e",$row["nom"])).'">'.$row["nom"].'</a>';
                $query2 = $linkpdo->prepare("select * from menu where parent=".$row["id"]);
                $query2->execute();
                while($row2 = $query2->fetch()){
                    if ($row2["nom"] === "Déconnexion" && !$_SESSION['login'])
                    {

                    }
                    else
                    {
                        if($first){
                            $menu = $menu.'<div class="dropdown-content">';
                            $first = false;
                        }
                        $menu = $menu."<a href='?rub=".strtolower(str_replace("é","e",$row2["nom"]))."'>".$row2["nom"]."</a>";

                    }
                }
                
                if(!$first){
                    $menu = $menu.'</div>';
                    $first = true;
                }
                
                $menu= $menu.'</div>';
            }
    ?>