<?php
require_once('util.php');
if ($_POST['installer'] == 'test') setupTestSocket();
//if ($_POST['installer'] == 'setup') setupSetupSocket();
$con = mysql_connect($_POST['host'], $_POST['username'], $_POST['password']);
if (!$con) die('Could not connect to Database: '.mysql_error());	
if ($_POST['installer'] == 'database') {
	if (mysql_select_db($_POST['database'])) echo 'db_exists';
	else echo 'db_doesnt_exists';
}
if ($_POST['installer'] == 'permissions') {
	if (!mysql_create_db('permission_tests')) die('Can\'t test Permissions');
}
if ($_POST['installer'] == 'setup') {
	mysql_create_db($_POST['dbname']);
	
}
exit;

function setupTestSocket() {
  echo 'setting up testsocket';
  $sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
  socket_bind($sock, get_host(), 8000);
  socket_listen($sock, 5);
    if (($msgsock = socket_accept($sock)) === false) {
      echo "socket_accept() failed: reason: " . socket_strerror(socket_last_error($sock)) . "\n";
      break;
    }
	$dbhost = socket_read($msgsock, 2048, PHP_NORMAL_READ);
	$dbusername = socket_read($msgsock, 2048, PHP_NORMAL_READ);
	$dbpassword = socket_read($msgsock, 2048, PHP_NORMAL_READ);
	$dbname = socket_read($msgsock, 2048, PHP_NORMAL_READ);
	$con = mysql_connect($dbhost, $dbusername, $dbpassword);
	if (!$con) {
      $msg = '<span class="icon-remove-circle"></span>Could not connect to Database: '.mysql_error();
	  socket_write($msgsock, $msg, strlen($msg));
	  socket_close($msgsock);
	  socket_close($sock);
	  exit;
	}else {
	  $msg = '<span class="icon-ok-circle"></span> Successfully connected to Database.<br/> Checking for Database \''.$dbname.'\'...';
	  socket_write($msgsock, $msg, strlen($msg));
	  if (mysql_select_db($dbname)) {
	  	$msg = '<span class="icon-ok-circle"></span> Successfully connected to Database.<br/><span class="icon-ok-circle"></span> Database \''.$dbname.'\' found<br/><span class="icon-ok-circle"></span> Everything is looking fine';
		socket_write($msgsock, $msg, strlen($msg));
	    socket_close($msgsock);
	    socket_close($sock);
	    exit;
	  }else {
	  	$msg = '<span class="icon-ok-circle"></span> Successfully connected to Database.<br/><span class="icon-warning-sign"></span> Database \''.$dbname.'\' not found<br/><span class="icon-warning-sign"></span> The Database which should be used has to be created! This can be done with the Installer at the end.';
		socket_write($msgsock, $msg, strlen($msg));
	    socket_close($msgsock);
	    socket_close($sock);
	    exit;	  	
	  }
	}
}

function setupSetupSocket() {
  echo 'setting up testsocket';
  $sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
  socket_bind($sock, get_host(), 8000);
  socket_listen($sock, 5);
  //do {
    if (($msgsock = socket_accept($sock)) === false) {
      echo "socket_accept() failed: reason: " . socket_strerror(socket_last_error($sock)) . "\n";
      break;
    }
	$dbhost = socket_read($msgsock, 2048, PHP_NORMAL_READ);
	$dbusername = socket_read($msgsock, 2048, PHP_NORMAL_READ);
	$dbpassword = socket_read($msgsock, 2048, PHP_NORMAL_READ);
	$dbname = socket_read($msgsock, 2048, PHP_NORMAL_READ);
	$con = mysql_connect($dbhost, $dbusername, $dbpassword);
	if (!$con) {
      $msg = '<span class="icon-remove-circle"></span>Could not connect to Database: '.mysql_error();
	  socket_write($msgsock, $msg, strlen($msg));
	  socket_close($msgsock);
	  socket_close($sock);
	  exit;
	}else {
	  $msg = '<span class="icon-ok-circle"></span> Successfully connected to Database.<br/> Checking for Database \''.$dbname.'\'...';
	  socket_write($msgsock, $msg, strlen($msg));
	  if (mysql_select_db($dbname)) {
	  	$msg = '<span class="icon-ok-circle"></span> Successfully connected to Database.<br/><span class="icon-ok-circle"></span> Database \''.$dbname.'\' found<br/><span class="icon-ok-circle"></span> Everything is looking fine';
		socket_write($msgsock, $msg, strlen($msg));
	    socket_close($msgsock);
	    socket_close($sock);
	    exit;
	  }else {
	  	$msg = '<span class="icon-ok-circle"></span> Successfully connected to Database.<br/><span class="icon-warning-sign"></span> Database \''.$dbname.'\' not found<br/><span class="icon-warning-sign"></span> The Database which should be used has to be created! This can be done with the Installer at the end.';
		socket_write($msgsock, $msg, strlen($msg));
	    socket_close($msgsock);
	    socket_close($sock);
	    exit;	  	
	  }
	}
  //} while (true);
}



?>