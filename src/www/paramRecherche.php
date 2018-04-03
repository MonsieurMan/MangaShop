<div style="padding-top:100px">
    <form action="?rub=recherche" method="post" id="paramRecherche_form">
        <?php
            include('src/connection.php');
            //$query = "select * from recherche";

            $query = $linkpdo->prepare("select * from Recherche");
            $query->execute();
            while($row = $query->fetch()){
            //$result = mysqli_query($link,$query);
            //while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                if($row["choix"]){
                    $div = "<select class='block select' name='".$row["nom"]."'><option></option>";
                    //$query = "select distinct ".$row["nom"]." from Reference";
                    $query = $linkpdo->prepare("select distinct ".$row["nom"]." from Reference");
                    $query->execute();
                    
                    //$options = mysqli_query($link,$query);
                    //while($option = mysqli_fetch_array($options)){
                    while($option = $query->fetch()){
                        $div = $div."<option>".$option[0]."</option>";
                    }
                    echo $div."</select>";
                }
                else{
                    if($row["nombre"]){
                        echo "<input class='block' name='".$row["nom"]."' type='number' placeholder='".$row["nom"]."'/>";
                    }else{
                        echo "<input class='block' name='".$row["nom"]."' type='text' placeholder='".$row["nom"]."'/>";
                    }
                }
            //}
            }
        ?>
        <input type="submit" value="Rechercher"/>
    </form>
</div>