<?php
  require('modele/gestion_capteur.php');

  if (isset($_POST['cle'])) // super globale, la valeur qui était entrée dans l'endroit clé, on regarde si elle existe.
  {
  // numéro de série
    $reponse = recup_all_objet($db);
    $i=0;
    while ($donnees = $reponse->fetch())
    {
      if($donnees['numero_de_serie'] == $_POST['cle'])
      {
        $i=1;
      }
    }
    $reponse->closeCursor();
    
    // Sinon , on vérifie que le numéro de série correspond bien à un objet existant
  	$a=0;
  	$reponse = recup_all_serie($db);
    while ($donnees = $reponse->fetch())
    {
      if($donnees['numero_de_serie'] == $_POST['cle'])
      {
        $a=1;
      }
    }
    
    // on a bien vérifié, maintenant on peut voir en fonction des cas si on peut ajouter ou pas l'objet.
    if($i==0)
    {
  	// on prend l'hypothèse que le numéro de série a bien été ajouté.
  	 	if($a==1)
      {
        ajout_objet($db);
      }
      else
      {
        $_SESSION['erreur'] = "Le numéro de série n'est pas attribué (25 caractères)</h3>";
  	    header("Location: index.php?page=ajout_objet");//Redirection vers la page d'erreur sur la page ajout_objet.
  	    exit(); 
      }

    }
    else
    {
      $_SESSION['erreur'] = "Cet objet a déjà été ajouté.</h3>";
  	  header("Location: index.php?page=ajout_objet");//Redirection vers la page d'erreur
  	  exit();//Permet l'arret du script
    }
  }
  else
  {
    echo '<br/>Erreur : Les variables ne sont pas correctement déclarées.';
  }

?>
