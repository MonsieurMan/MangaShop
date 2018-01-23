<header>
    <span class="name"><a href="?rub=accueil"><span id="blanc">Manga</span><span id="bleu">Shop</span></a></span>
    <nav>
        <?php
            include('src/www/menu.php');
            echo $menu;
        ?>
    </nav>
    <div class="panier">     
        <?php 
            include('src/totalPanier.php');
        ?>
    </div>
</header> 