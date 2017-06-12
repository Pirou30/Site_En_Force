<?php

// Ceci permet de gérer le formulaire de connexion des utilisateurs
require("modele/gestion_utilisateur.php");

$reponse = mdp($db,$_POST['login']); // appel de la fonction qui se trouve dans gestion utilisateur


?>
