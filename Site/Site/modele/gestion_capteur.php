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

// fonction qui cherche tous les capteurs dans la base de données dépendant de quelle piece ou ils se trouvent
  function recup_all_objet($db)
  {
    $id_utilisateur = $_SESSION['id_utilisateur']; // variable qui déclare l'ouverture d'une session avec un utilisateur
    $reponse = $db->query("SELECT * FROM objet_connecte WHERE id_piece IN (SELECT id_piece FROM posseder WHERE id_utilisateur = '".$id_utilisateur."')");
    return $reponse;
  }



// fonction qui cherche tous les capteurs dans la base de données
  function recup_all_serie($db)
  {
    $reponse = $db->query('SELECT * FROM numero_serie');
    return $reponse;
  }



// fonction qui cherche toutes les catégories dans la base de données
  function recup_all_categorie($db)
  {
    $reponse = $db->query('SELECT * FROM categorie');
    return $reponse;
  }
