<?php

$onglet = "Conditions d'utilisation";
$titre = "Conditions d'utilisation";
$menu = $function; //connecte ou pas

ob_start();

include("vue/conditions_admin.php");

$contenu = ob_get_clean();

require("vue/gabarit.php");

?>
