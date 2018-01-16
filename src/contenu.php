<?php
$page="accueil";

if (isset($_GET["rub"])) {
	$page=$_GET["rub"];
}

include "www/".$page.".php";


?>
