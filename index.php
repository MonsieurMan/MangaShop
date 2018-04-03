<?php
session_start();
//$_SESSION["ajoute"] = true;
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<link rel="stylesheet" media="screen" type="text/css" title="design" href="src/css/style.css" />
		<link rel="stylesheet" media="screen" type="text/css" title="design" href="src/css/header.css" />
		<link rel="stylesheet" media="screen" type="text/css" title="design" href="src/css/acheter.css" />
		<link rel="stylesheet" media="screen" type="text/css" title="design" href="src/css/vendre.css" />
		<link rel="stylesheet" media="screen" type="text/css" title="design" href="src/css/accueil.css" />
		<link rel="stylesheet" media="screen" type="text/css" title="design" href="src/css/detail.css" />
		<link rel="stylesheet" media="screen" type="text/css" title="design" href="src/css/login.css" />
		<link rel="stylesheet" media="screen" type="text/css" title="design" href="src/css/marche.css" />
		<link rel="stylesheet" media="screen" type="text/css" title="design" href="src/css/paramRecherche.css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
	<?php
		include ("src/corps.php");
	?>
	<script src="src/assets/js/jquery-3.3.1.min.js"></script>
	<script src="src/assets/js/login.js"></script>
    <script src="src/assets/js/profil.js"></script>
	</body>
</html>