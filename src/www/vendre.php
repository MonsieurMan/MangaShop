<div class="opacity">
</div>
<div class="vendre">
    
    <form class="form" action="ajoutManga.php" method="POST">
        <p class="titreV">Mise a prix de votre <span id="orange">manga</span> :</p>
        <div class="champs">
            <input class="input" type="text" name="titre" value="" placeholder="Titre du manga">
            <input class="input" type="text" name="auteur" placeholder="Auteur du manga">
            <input class="input" type="text" name="categorie" placeholder="Catégorie du manga">
            <select class="input selectV" name="version">
                <option class="optionV"  value="1" selected label="Choisissez la version">Normal</option>
                <option class="optionV" value="2">Deluxe</option>
            </select>
            <input class="input" type="number" name="nbPage" placeholder="Nombre de pages">
            <input class="input" type="text" name="prix" placeholder="Prix du mange">
            <button class="button input" type="submit">Envoyer</button>
        </div>
        <?php 
            if(isset($_SESSION['ajoute'])){
                if($_SESSION['ajoute'] == true){
                    echo '<div class="confAjout">Votre manga a bien été ajouté ! </div>';
                    $_SESSION['ajoute'] = false;
                }
            }
            
        ?>
        
    </form>
    
</div>