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
