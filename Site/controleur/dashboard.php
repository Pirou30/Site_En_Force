<?php
  require("modele/gestion_dashboard.php");


  require("modele/gestion_utilisateur.php");

//titre de l'onglet
  $onglet = "Dashboard";
//type du menu
    $menu = $function;
//définition des variables nécessaire pour générer la page
  $piece_array = recup_piece();
  $user_id = $_SESSION['id_utilisateur'];
  $ddd = get_primary_user_piece_rights($db, $user_id);
  foreach ($ddd as $array) {
    $droit_array[$array['id_piece']] = $array;
  }
//bloque tous les envois des fichiers que l'on appel + bloque tous les echos
  ob_start();
  include("vue/dashboard.php");
  $contenu = ob_get_clean();
//insertion dans le gabarit pour construire la page
  require("vue/gabarit.php");
?>
