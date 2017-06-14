<?php

function ajout_objet($db)
 {

    $today = date("Y-m-d H:i:s"); // on créé une variable pour indiquer la date, on met i pour minute car m existe pour moi
//requete d'insertion du capteur dans la base de donnée
    $req = $db->prepare('INSERT INTO objet_connecte( numero_de_serie, date_d_installation, etat_de_fonctionnement, date_de_modification, id_piece, id_categorie)
      VALUES(:numero_de_serie, :date_d_installation, :etat_de_fonctionnement, :date_de_modification, :id_piece, :id_categorie)');
//
    $reponse = $db->query('SELECT id_categorie FROM numero_serie WHERE numero_de_serie ="'.$_POST['cle'].'"');
    $type = $reponse ->fetch();

//Execution de la requête
   $req->execute(array(
     'numero_de_serie' => $_POST['cle'],
     'date_d_installation' => $today,
     'etat_de_fonctionnement' => ON,
     'date_de_modification' => $today,
     'id_piece' => $_POST['salle'],
     'id_categorie' => $type[0]
   ));
//désactivation du numéro de série
  $cle = $_POST['cle'];
  $req2 = $db -> query("UPDATE numero_serie SET activation = 0 WHERE numero_de_serie = '".$cle."'");
 }
