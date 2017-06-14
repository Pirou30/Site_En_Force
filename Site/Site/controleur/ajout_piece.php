<?php

  $onglet = "Ajouter une pièce";
  $menu = $function;

  ob_start();
  include("vue/ajout_piece.php");
  $contenu = ob_get_clean();
  
  require("vue/gabarit.php");

?>
