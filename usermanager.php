<?php
require_once('config.php');
require_once('connector.php');
//require_once('database.php');
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) login();
if (isset($_POST['logout'])) logout();

function login() {
  
  if ($_POST['username'] == USERNAME && $_POST['password'] == PASSWORD) {
  	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = md5($_POST['password']);
  }
}

function logout() {
  session_destroy();
}

function isLoggedIn() {
  if(isset($_SESSION['username']) && $_SESSION['username']!=NULL) {
	return true;
  }
}
?>