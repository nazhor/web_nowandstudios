<?php 
        $db = mysql_connect('localhost', 'gjallarhornscore', 'z}{tZ{H}[sMpeWvT') or die('Could not connect: ' . mysql_error()); 
        mysql_select_db('gjallarhornscores') or die('Could not select database');
 
        // Strings must be escaped to prevent SQL injection attack. 
        $name = mysql_real_escape_string($_GET['name'], $db); 
        $score = mysql_real_escape_string($_GET['score'], $db); 
        $hash = $_GET['hash']; 
 
        $secretKey="n/cj<LA4<*9YBK]id8rL?xJgi"; 

        $real_hash = md5($name . $score . $secretKey); 
        if($real_hash == $hash) { 
            // Send variables for the MySQL database class. 
            $query = "insert into scores values (NULL, '$name', '$score');"; 
            $result = mysql_query($query) or die('Query failed: ' . mysql_error()); 
        } 
?>