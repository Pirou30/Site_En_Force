<?php


$onglet = "Inscription";
$titre = "Mon site / Inscription";
$menu = $function; //connecte ou pas

ob_start();

include("vue/inscription.php");

$contenu = ob_get_clean();



require("vue/gabarit.php");


?>
