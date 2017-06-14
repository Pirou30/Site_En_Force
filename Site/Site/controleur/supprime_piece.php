<?php

    $onglet = "Supprimer une pièce";
    $menu = $function;
    $title = "Supprimer une pièce";

    ob_start();
    include("vue/supprime_piece.php");
    $contenu = ob_get_clean();

    require("vue/gabarit.php");

?>
