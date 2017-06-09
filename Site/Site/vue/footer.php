<div id="piedpage">
<footer>
  <ul>
    <a href="">Mentions légales</a>
    <?php
    if (isset($_SESSION['type']) && $_SESSION['type']=='admin')
    {
    ?>
      <a href="">Conditions d'utilisation</a>
    }
    else
    {
    ?>
      <a href="">Conditions d'utilisation</a>
    <?php
    }
    ?>
    <a href="">Contact et assistance</a>
  </ul>
</footer>
</div>
</html>
