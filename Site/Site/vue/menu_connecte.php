  <div id=menudeco>

    <?php
      if ($_SESSION['type'] == 'primaire')
      {
      ?>
         <div id="Banniere">

      <div id="Logo">
         <p><a href="index.php?page=dashboard" > <img  src="vue/image/background-logo.png" /></a> </p>
        </div>
        <div id="Logo2">
         <p><img src="vue/image/Logo.png"/> </p>
        </div>

    </div>
  <ul>

        <li class ="nav"> <a href="index.php?page=dashboard">Vue Générale</a></li>
        <li class ="nav"> <a href="index.php?page=piece">Pièces</a></li>
        <li class ="nav"> <a href="">Objets connectés</a></li>
        <li class ="nav"> <a href="">Préférences</a></li>
        <li > <p><a href="index.php?page=connexion&function=deconnecte"></a></p></li>
      <?php
      }
      elseif ($_SESSION['type'] == 'secondaire')
      {
      ?>

            <div id="Logo">
          <p><a href="index.php?page=dashboard" > <img  src="vue/image/background-logo.png" /></a> </p>
        </div>
        <div id="Logo2">
         <p><img src="vue/image/Logo.png"  /> </p>
        </div>
        <div id=Deconnexion>
        <p><a><img src="vue/image/deconnexion.png" /></a> </p>
      </div>
    </div>



        <li class ="nav"> <a href="index.php?page=dashboard">Dashboard</a></li>
        <li class ="nav"> <a href="">Utilisateurs</a></li>
        <li class ="nav"> <a href="index.php?page=connexion&function=deconnecte"></a></li>
      <?php
      }
      elseif ($_SESSION['type'] == 'admin')
      {
      ?>

            <div id="Logo">
          <p><a href="" > <img  src="vue/image/background-logo.png" /></a> </p>
        </div>
        <div id="Logo2">
         <p><img src="vue/image/Logo.png"  /> </p>
        </div>
        <div id=Deconnexion>
        <p><a><img src="vue/image/deconnexion.png" /></a> </p>
      </div>
    </div>



        <li class ="nav"> <a href="">Modifier conditions</a></li>
        <li class ="nav"> <a href="">Liste utilisateurs</a></li>
        <li class ="nav"> <a href="">Clés</a></li>
        <li class ="nav"> <a href="index.php?page=connexion&function=deconnecte"></a></li>
      <?php
      }
     ?>
</ul>
</div>
