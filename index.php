<?php
  if (!file_exists('config.php')) {
    include_once('install.php');
    return;
  }
  require_once('connector.php');
  if (!isLoggedIn()) include_once('login.php');
  else require_once('layout.php');
?>
