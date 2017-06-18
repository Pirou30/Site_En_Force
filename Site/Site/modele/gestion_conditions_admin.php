<?php
  function get_user_list($db)
  {
    $req = $db -> query("SELECT * FROM utilisateur");
    return $req;
  }
?>