<div style="padding-top:100px;width:60%;margin:auto">
    <div style="font-weight:700;font-size:24px;margin-bottom:25px;">Panier</div>
    <?php
    include('src/connection.php');
    if ($_SESSION['login']) {
        $idUser = $_SESSION['idUser'];

        $query = $linkpdo->prepare('select * from Panier p join Reference r on r.idR = p.idR where p.idU = ?');
        $query->bindParam(1, $idUser);
        $query->execute();
        $array = $query->fetchAll();
        foreach($array as $el)
        {
            echo '<div style="width:300px;position:relative">' .
                    $el["titre"] .
                '<span class="supprimer_panier" id="' . $el["idR"] .'" style="position:absolute;right:0;color:#ff5566;cursor:pointer">Supprimer</span>' .
                 '</div>';
        }

    ?>
        <div style="font-weight:700;font-size:24px;margin-bottom:25px;">Mes articles</div>
    <?php
        $query = $linkpdo->prepare('select * from Reference where idU = ?');
        $query->bindParam(1, $idUser);
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row)
        {
            echo '<div style="width:300px;position:relative">' .
                $row['titre'] .
                '<span class="supprimer_offre" id="' . $row["idR"] .'" style="position:absolute;right:0;color:#ff5566;cursor:pointer">Supprimer</span>' .
                '</div>';
        }
    }
    else {
        header('Location: /?rub=login');
    }
    ?>
</div>
<script src="src/assets/js/profil.js"></script>
