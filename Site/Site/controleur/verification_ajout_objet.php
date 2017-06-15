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
