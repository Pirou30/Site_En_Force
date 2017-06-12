
<?php

// Ceci permet de gérer le formulaire de connexion des utilisateurs
require("modele/gestion_utilisateur.php");

$reponse = mdp($db,$_POST['login']); // appel de la fonction qui se trouve dans gestion utilisateur

if($reponse->rowcount()==0)      //Si l'utilisateur non trouvé dans la base de données
{
  $_SESSION['erreur'] = "l'utilisateur est inconnu</h3>";
  header("Location: index.php?page=connexion"); // Redirection vers la page d'erreur
  exit(); //Arret du Script
}
else   // Dans le cas contraire
{
  
  
?>
