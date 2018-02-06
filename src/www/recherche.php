<div style="padding-top:100px">
    <?php
        include('src/connection.php');
        $query = "select * from Reference";
        $first = true;
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
                        $query = $query." and $key=$value";
                    else
                        $query = $query." and $key like '%$value%'";
                }
            }
        }        
        //echo $query;
        $result = mysqli_query($link,$query);
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            echo $row["titre"];
        }
    ?>
</div>