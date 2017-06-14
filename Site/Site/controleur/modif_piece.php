<?php

    $onglet = "Modifier une pièce";
    $menu = $function;
    $title = "Modifier une pièce";
	
    ob_start();
    include("vue/modif_piece.php");
    $contenu = ob_get_clean();

    require("vue/gabarit.php");

?>
