<?php
require_once('usermanager.php');
if (isset($_POST['action'])) {
	if (isset($_POST['plugin'])) echo query($_POST['action'], array("plugin"=>$_POST['plugin']));
	else echo query($_POST['action']);
}

function query($action, $args=array()) {
	try {
		$jsonQuery = "";
		$query = array("type"=>"webinterface", "username"=>$_SESSION['username'], "password"=>$_SESSION['password'], "action"=>$action);
		$query = array_merge($query, $args);
		$jsonQuery = json_encode($query);
  		$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
  		socket_connect($sock, SERVER_IP, BM_PORT);
		socket_write($sock, $jsonQuery.chr(13).chr(10), strlen($jsonQuery)+2);
		$reply = ""; 
		do { 
    		$recv = ""; 
    	 	$recv = socket_read($sock, '1400'); 
    	 	if($recv != "") $reply .= $recv; 
		} while($recv != "");
		socket_close($sock);
		return $reply;
	}catch (Exception $e) {
		
	}
}
?>