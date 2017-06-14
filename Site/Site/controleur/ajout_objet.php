<?php
  require("modele/gestion_capteur.php"); // on doit se servir du fichier dans modèle pour importer les fonctions

  $onglet = "Ajouter un objet"; // titre de l'onglet

  $menu = $function; // function définit dans l'index, soit deconnecté, soit connecté. 


  $categorie_array = recup_all_categorie($db);  // définition des variables nécessaire pour générer la page, importation des fonctions. 
  $piece_array = recup_all_piece_ordered_by_name($db);

  ob_start(); // on le met en cache pour l'afficher ensuite.
  include("vue/ajout_objet.php");
  $contenu = ob_get_clean();

  require("vue/gabarit.php"); //on le met dans le gabarit pour construire la page
?>
