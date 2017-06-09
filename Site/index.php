<?php


    session_start();

    require("modele/connect_database.php");
    require("modele/gestion_index.php");



if(isset($_GET['page']))
{

    $controleur = $_GET['page'];

    if(isset($_SESSION['UserID']) && $_SESSION['UserID']==NULL && isset($function) && ($function == 'connecte' || $controleur == 'dashboard' || $controleur == 'piece' || $controleur == 'objet' || $controleur == 'profile' || $controleur == 'modif_conditions_admin'||  $controleur == 'conditions_admin' || $controleur == 'cle' ))
    {
      $controleur = 'connexion';
      $function = 'deconnecte';
    }
}

else
{
if(isset($_COOKIE['login']) && isset($_COOKIE['mdp']))
  {
       $result = id_cookie($db,$_COOKIE['login'],$_COOKIE['mdp']);
       if($result!=NULL)
       {
         $cook = $result->fetch();
         $_SESSION['UserID'] = $cook['id_utilisateur'];
         $_SESSION['id_utilisateur']= $cook['id_utilisateur'];
         $_SESSION['type'] = $cook['type'];
         $_SESSION['prenom'] = $cook['prenom'];
         $controleur = 'dashboard';
       }
       else {
         $controleur = 'connexion';
         unset($_SESSION['UserID']);
       }

  }

  else
  {

    $controleur = 'connexion';
    unset($_SESSION['UserID']);
  }
}



if(isset($_GET['function']))
  {

    $function = $_GET['function'];

       if($_SESSION['UserID']==NULL && ($function == 'connecte' || $controleur == 'dashboard' || $controleur == 'piece' || $controleur == 'objet' || $controleur == 'profile' || $controleur == 'modif_conditions_admin'|| $controleur == 'conditions_admin' || $controleur == 'cle' ))
      {
        $controleur = 'connexion';
        $function = 'deconnecte';
      }




  }

else
  {     //On vient vérifier si l'utilisateur est connecte
        if(isset($_SESSION['UserID']))
        {
         $function = 'connecte';

        }

        elseif(isset($_SESSION['UserID']) && $_SESSION['UserID']==NULL && isset($function) && $function == 'connecte')
        {
          $controleur = 'connexion';
          $function = 'deconnecte';
        }

      else
       {
        $function = 'deconnecte';




    }
  }

if($function == 'deconnecte' && $controleur == 'connexion')
{
  unset($_SESSION['UserID']);
  unset($_SESSION['id_utilisateur']);
  unset($_SESSION['type']);
  setcookie('login','', time() + (86400 * 30), "/");
  setcookie('mdp','', time() + (86400 * 30), "/");
  session_destroy();
}



  require("controleur/".$controleur.".php");




?>
