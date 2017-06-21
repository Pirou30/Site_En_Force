<?php


$onglet = "Objets connectés";
$titre = "Mon site / Inscription";

$menu = $function; //connecte ou pas

ob_start();

include("vue/objet.php");

$contenu = ob_get_clean();



require("vue/gabarit.php");


?>
