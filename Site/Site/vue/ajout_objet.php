<div id="contenu">

    <input value="Retour" class="boutonretour" required type="submit" onclick="history.go(-1)"> 
    <?php
    
      if (isset($_SESSION['erreur'])) // message d'erreur au cas ou cela ne passe pas
      {
        echo '<h3 id="erreurco" class="basic-grey">Une erreur est survenue car : '.$_SESSION['erreur'];
        unset($_SESSION['erreur']);
      }
    ?>
