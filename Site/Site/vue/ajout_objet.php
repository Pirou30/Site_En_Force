<div id="contenu">

    <input value="Retour" class="boutonretour" required type="submit" onclick="history.go(-1)"> 
    <?php // bouton retour, qui revient une place avant, type : submit.
    
      if (isset($_SESSION['erreur'])) // message d'erreur au cas ou cela ne passe pas
      {
        echo '<h3 id="erreurco" class="basic-grey">Une erreur est survenue car : '.$_SESSION['erreur']; // deux cas :soit objet deja ajouté, soit numéro de série pas attribué
        unset($_SESSION['erreur']); // destruction de la variable du coup.
      }
    ?>
    <form method="POST" class="inscription" action="index.php?page=verif_ajout_objet">
      <h3>
        Numéro de Série de l'Objet
      </h3>

      
      </p>

      <input type="text" class="champss" name="cle" placeholder="Entrer le numéro de série" />
      

      <h3>
        Pièce de la maison correspondante :
      </h3>

      <select class="champss" name="salle">
      <?php
        while ($donnees = $piece_array->fetch()) // on va chercher les pièces rangées dans l'ordre alphabétique, boucle. 
        {
        ?>
          <option value="<?php echo $donnees['id_piece']; ?>"> <?php echo $donnees['localisation_dans_la_maison']; ?></option>
        <?php
        }
      ?>
      </select>
      </br>
      <input class="champss" type="submit" value="Ajouter" />
    </form>
</div>
