<?php


$onglet = "Connexion";

$menu = $function; //connecte ou pas

ob_start();

include("vue/connexion.php");

$contenu = ob_get_clean();



require("vue/gabarit.php");


?>
