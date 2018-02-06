<div class="acheter"> 
<?php
    if($_SESSION['login']){
        include('src/chargerReferences.php');
    }else{
        header('Location: ?rub=login');
    }
?>
</div>