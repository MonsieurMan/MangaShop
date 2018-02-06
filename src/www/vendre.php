<div class="opacity">
</div>
<div class="vendre">
    
    <form class="form" action="src/ajoutManga.php" method="POST">
        <p class="titreV">Mise a prix de votre <span id="orange">manga</span> :</p>
        <div class="champs">
            <input class="input" type="text" name="titre" value="" placeholder="Titre du manga" required>
            <input class="input" type="text" name="auteur" placeholder="Auteur du manga" required>
            <input class="input" type="text" name="categorie" placeholder="Catégorie du manga" required>
            <select class="input selectV" name="version" >
                <option class="optionV"  value="1" selected label="Choisissez la version">Normal</option>
                <option class="optionV" value="2">Deluxe</option>
            </select>
            <input class="input" type="number" name="nbPage" placeholder="Nombre de pages" required>
            <input class="input" type="number" name="prix" placeholder="Prix du manga" required>
            <button class="button input" type="submit">Envoyer</button>
        </div>
        <?php 
            if(!$_SESSION['login']) header('Location: ?rub=login');
            if(isset($_SESSION['ajoute'])){
                if($_SESSION['ajoute'] == true){
                    echo '<div class="confAjout"><img class="imgV" src="src/assets/images/icone_v.png" alt=""> Votre manga a bien été ajouté ! </div>';
                    unset($_SESSION['ajoute']);
                }else if($_SESSION['ajoute'] == false) {
                    echo "<div class='errAjout'><img class='imgV' src='src/assets/images/croix_r.png' alt=''> Erreur lors de l'ajout du manga ! </div>";
                    unset($_SESSION['ajoute']);
                }
            }
            
        ?>
        
    </form>
    
</div>