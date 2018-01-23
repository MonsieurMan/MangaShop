
    <?php
        include('../connection.php');
        $query = "select * from menu where parent is NULL";
        $menu = "";
        $first = true;
        mysqli_set_charset($link,'utf8');

        if($result = mysqli_query($link,$query)){
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $menu = $menu.'<div class="dropdown"><a class="dropbtn" href="?rub='.strtolower($row["nom"]).'">'.$row["nom"].'</a>';
                $query2 = "select * from menu where parent=".$row["id"];
                if($result2 = mysqli_query($link,$query2)){
                    while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                        if($first){
                            $menu = $menu.'<div class="dropdown-content">';
                            $first = false;
                        }
                        $menu = $menu."<a href='?rub=".strtolower($row2["nom"])."'>".$row2["nom"]."</a>";
                    }
                    if(!$first){
                        $menu = $menu.'</div>';
                        $first = true;
                    }
                    mysqli_free_result($result2);
                }
                $menu= $menu.'</div>';
            }
            mysqli_free_result($result);
        }
        
        mysqli_close($link);
        return $menu;
    ?>