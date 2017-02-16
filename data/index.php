<?php
  session_start();
  $_SESSION['dataProject'] = true;
  header("Location: ../index.php");
  die();
?>
