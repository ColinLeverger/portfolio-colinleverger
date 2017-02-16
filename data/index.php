<?php
  session_start();
  $_SESSION['dataProject'] = true;
  header("Location: ../");
  die();
?>
