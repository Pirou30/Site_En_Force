

<?php


function get_primary_user_piece_list($db)
{
  $user_id = $_SESSION['id_utilisateur'];
  $sql = "SELECT id_piece, localisation_dans_la_maison FROM piece WHERE id_piece ";
  return ;
}


function get_password($db, $id)
{
  $sql = 'SELECT mot_de_passe FROM utilisateur WHERE id_utilisateur ="'.$id.'"';
  $req = $db->query ($sql);
  $user_password = $req -> fetch();

  return $user_password;
}

function get_user_id($db,$login)
{
  $sql = "SELECT id_utilisateur FROM utilisateur WHERE login = '".$login."'";
  $req = $db->query ($sql);
  $userid = $req -> fetch();

  return $userid;
}

function get_profil($db, $userid)
{
  $sql = "SELECT * FROM utilisateur WHERE id_utilisateur = '".$userid."'";

  $req = $db->query ($sql);
  $donnees = $req -> fetch();

  $_POST['nom'] = $donnees['nom'];
  $_POST['prenom'] = $donnees['prenom'];
  $_POST['email'] = $donnees['email'];
  $_POST['numero_de_telephone'] = $donnees['numero_de_telephone'];
  $_POST['adresse'] = $donnees['adresse'];
  $_POST['login'] = $donnees['login'];
  $_POST['date_de_naissance'] = $donnees['date_naissance'];
  $_POST['date_d_ajout'] = $donnees ['date_d_ajout'];
}
// fonction permettant de chercher le mot de passe d'un utilisateur avec un identifiant avec la base de données
function mdp($db,$identifiant)
{
  $reponse = $db->query('SELECT id_utilisateur, mot_de_passe FROM utilisateur WHERE login="'.$identifiant.'"');
  return $reponse;
}
 ?>
