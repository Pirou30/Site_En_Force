<?php
  require("modele/gestion_conditions_admin.php");

  $onglet = "Liste des utilisateurs";

  $menu = $function;

  $user_list = get_user_list($db);
  $i=0;
  while ($liste_utilisateurs[$i++] = $user_list->fetch())
  {
  }

  ob_start();
  include("vue/liste_utilisateur.php");

  $contenu = ob_get_clean();

  require("vue/gabarit.php");

?>
