<?php
  // print "clear cookie then redirect";

  setcookie('pokemon', "", time() - 3600);

  header("Location: index.php");

?>