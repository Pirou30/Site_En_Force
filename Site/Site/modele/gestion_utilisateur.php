
<?php
// fonction pour ajouter un utilisateur sec
function secondary_user_register($db)
{
  $pass_hache = sha1($_POST['mdp']);

//Date variables
  $today = date("Y-m-d H:i:s");
  $dte=$_POST['date_naissance'];
  $mm=$dte[0].$dte[1];
  $dd=$dte[3].$dte[4];
  $aaaa=$dte[6].$dte[7].$dte[8].$dte[9];
  $date_naissance=$aaaa.'-'.$mm.'-'.$dd;

  $req3 = $db->prepare('INSERT INTO utilisateur(nom, prenom, email, numero_de_telephone, adresse, type,
  login, mot_de_passe, date_d_ajout, date_naissance,	id_utilisateur_1)

  VALUES(:nom, :prenom, :email, :numero_de_telephone, :adresse, :type, :login, :mot_de_passe,
   :date_d_ajout, :date_naissance,	:id_utilisateur_1)');

  $req3 -> execute(array(
   'nom' => $_POST['nom'],
   'prenom' => $_POST['prenom'],
   'email' => $_POST['email'],
   'numero_de_telephone' => $_SESSION['numero_de_telephone'],
   'adresse' => $_SESSION['adresse'],
   'type' => secondaire,
   'login' => $_POST['login'],
   'mot_de_passe' => $pass_hache,
   'date_d_ajout' => $today,
   'date_naissance' => $date_naissance,
   'id_utilisateur_1' =>$_SESSION['id_utilisateur']
   ));
  $identifiant = $_POST['login'];
   $sql = "SELECT id_utilisateur FROM utilisateur WHERE login = '".$identifiant."'";
   $req = $db->query ($sql);
   $userid = $req -> fetch();

   $array_liste_piece = get_primary_user_piece_list($db);

   $line = 0;
   do
   {
     $piece_primaire = $array_liste_piece[$line]['id_piece'];
     if (isset($piece_primaire))
     {
       $req = $db->droit('INSERT INTO posseder(droit_d_utilisateur, date_de_modification_des_droits, id_utilisateur, id_piece) VALUES(:droit_d_utilisateur, :date_de_modification_des_droits, :id_utilisateur, :id_piece)');
       $req->execute(array(
         'droit_d_utilisateur' => NULL,
         'date_de_modification_des_droits' => $today,
         'id_utilisateur' => $userid['id_utilisateur'],
         'id_piece' => $piece_primaire
       ));
       $line++;
       $next_user = $array_liste_piece[$line]['id_piece'];
     }
   } while (isset($next_user));
}
  
  
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

//Fonction permettant de définir la session de l'utilisateur connecté
function set_session_current_user($db, $identifiant)
{
  $sql = "SELECT * FROM utilisateur WHERE login = '".$identifiant."'";
  $request = $db->query ($sql);                          //Execution de la requete sur db
  $donnees = $request -> fetch();                     //$donnees contient toutes les info personnelles de l'utilisateur connecté
  
  $_SESSION['nom'] = $donnees['nom'];
  $_SESSION['prenom'] = $donnees['prenom'];
  $_SESSION['email'] = $donnees['email'];
  $_SESSION['numero_de_telephone'] = $donnees['numero_de_telephone'];
  $_SESSION['adresse'] = $donnees['adresse'];
  $_SESSION['login'] = $donnees['login'];
  $_SESSION['date_de_naissance'] = $donnees['date_naissance'];
  $_SESSION['date_d_ajout'] = $donnees ['date_d_ajout'];
  $_SESSION['id_utilisateur'] = $donnees['id_utilisateur'];
  $_SESSION['id_utilisateur_1'] = $donnees['id_utilisateur_1'];
  $_SESSION['type'] = $donnees['type'];
}
  

 ?>
