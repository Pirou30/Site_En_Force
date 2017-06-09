
<body id="bodyautre">
<div id="banniereautre" class="banner2">


</div>

<form method="POST" name="formulaire" action="index.php?page=verif_inscription" class="inscription">
  <p style="font-style:italic"> Placez votre souris sur un champ pour savoir comment le remplir </p>
  <h3>Clé d'inscription</h3>
  <div id="eveC">
    <input type="text" name="cle" placeholder=" Numéro de série"  required title="Vous trouverez votre clé d'inscription dans votre produit DOMISEP"/>

  </div>



      <h3>Informations personnelles</h3>
      <p>
      <input id="nomm" type="text" name="nom" placeholder=" Nom"  required  title="Le nom doit contenir entre 2 et 25 caractères"/>
      <input id="prenomm" type="text" name="prenom" placeholder=" Prénom" required title="Le prénom doit contenir entre 2 et 25 caractères"/>
      <div id="eveM">
      <input id="mailm" type="email" name="email" placeholder=" E-mail" required title="E-mail du type : user@domain.com"/>
      
      </div>

     </p>


   <p>
   <input id="telm" type="text" name="tel" placeholder=" Téléphone" required title="Numéro de téléphone sans espace du type : 0102030405"/>

   </p>
   <p> Date de naissance</p>
     <p>
     <input type="text" name="date_naissance" id="choix_date" placeholder="jj/mm/aaaa" required/>
   </p>

   <p>
     <h3>Adresse</h3>

    <input id="adresse" type="text" name="type_voie" placeholder=" N° et libellé de la voie" required title="Indiquez le numéro, le type et le nom de la voie"/>
    <input id="postalm" type="text" name="code_postal" placeholder=" Code postal" required size="7" title="Indiquez votre code postal"/>
 <input id="villem" type="text" name="ville" placeholder=" Ville" required title="Indiquez le nom de votre ville"/>

   </p>


 <h3>Informations de connexion</h3>
       <p>
           <div id="eveL" >
         <input id="loginm" type="text" name="login" placeholder="Pseudo utilisé pour la connexion" size="25" required title="Le login doit contenir entre 3 et 25 caractères"/>
          

            </div>
       </p>
       <p>
<input id="mdpm" type="password" name="mdp" placeholder="Mot de passe" title="Minimum 8 caractères (uniquement des chiffres et des lettres); au moins 1 lettre et 1 chiffre" required/>
       </p>

       <p>
<input id="mdp2m" type="password"  name="mdp_2" placeholder="Confirmer le mot de passe" required/>
       </p>




    <p><input type="checkbox" required /> J'ai lu et accepte les <a href="index.php?page=conditions">Conditions Générales d'Utilisation</a> </p>

    <p>
   <input id="submitbutton" type="submit" value="Créer mon compte" />
   <p id="erreurchamp">
   </p>
   </p>

  </form>
</body>
