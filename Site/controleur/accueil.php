<?php

    $onglet = "DOMISEP";
  //  $titre = "Mon site / Accueil";
    $menu = $function; //connecte ou pas

    ob_start();//bloque tous les envois des fichiers que l'on appel + bloque tous les echos


    $contenu = ob_get_clean();



  require("vue/gabarit.php");

?>
