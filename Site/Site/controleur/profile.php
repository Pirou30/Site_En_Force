<?php

  require("modele/gestion_utilisateur.php");

  $onglet = "Profil";
  $titre = "Profil";

  $menu = $function;


  $user_type = 'primary';
  $userid = $_SESSION['id_utilisateur'];

  if (isset($_POST['user_id']))
  {

    $user_type = 'secondary';

    $userid = $_POST['user_id'];
  }

  get_profil($db, $userid);


  ob_start();
  include("vue/profile.php");
  $contenu = ob_get_clean();

  require("vue/gabarit.php");
?>
