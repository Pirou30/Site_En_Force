<?php
 


  require("modele/gestion_utilisateur.php");


  $onglet = "Dashboard";

    $menu = $function;

  ob_start();
  include("vue/dashboard.php");
  $contenu = ob_get_clean();
  require("vue/gabarit.php");
?>
