<?php
if (isset($_POST['installer'])) require_once('setupDb.php');
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (!$con) die('Could not connect: '.mysql_error());
mysql_select_db(DB_NAME, $con);

function sql_query($query) {
    $numParams = func_num_args(); 
    $params = func_get_args(); 
    
    if ($numParams > 1) { 
        for ($i = 1; $i < $numParams; $i++){ 
            $params[$i] = mysql_real_escape_string($params[$i]); 
        } 
        
        $query = call_user_func_array('sprintf', $params); 
    } 
    
    $result = mysql_query($query); 
    if (!$result) die(mysql_error()); 
    $ret = array(); 
    while ($row = mysql_fetch_assoc($result)) { 
        $ret[] = $row; 
    } 
    mysql_free_result($result); 
    return $ret;
}
?>