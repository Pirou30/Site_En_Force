
<?php

// Ceci permet de gérer le formulaire de connexion des utilisateurs
require("modele/gestion_utilisateur.php");

$reponse = mdp($db,$_POST['login']); // appel de la fonction qui se trouve dans gestion utilisateur

if($reponse->rowcount()==0)      //Si l'utilisateur non trouvé dans la base de données
{
  $_SESSION['erreur'] = "l'utilisateur est inconnu</h3>";
  header("Location: index.php?page=connexion"); // Redirection vers la page de connexion
  exit(); //Arret du Script
}

else   // Dans le cas contraire
{
  $ligne = $reponse->fetch(); //fetch va chercher dans $reponse et organiser les champs dans $ligne
  
  if(sha1($_POST['mdp'])!=$ligne['mot_de_passe']) //Comparaison du mpd entré avec celui stocké dans la base de donnée (hachage)
    {                                             //Lorsque ces 2 mdp sont différents
    $_SESSION['erreur'] = "le mot de passe est incorrect</h3>";
    header("Location: index.php?page=connexion");
    exit();
  }
  
  else      // Dans le cas où le mdp entré correspond au mdp stocké dans la db
  {
    
?>
