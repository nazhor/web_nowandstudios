<?php
    // Send variables for the MySQL database class.
    $database = mysql_connect('localhost', 'gjallarhornscore', 'z}{tZ{H}[sMpeWvT') or die('Could not connect: ' . mysql_error());
    mysql_select_db('gjallarhornscores') or die('Could not select database');
 
    $query = "SELECT * FROM `scores` ORDER by `score` DESC";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
 
    $num_results = mysql_num_rows($result);  
	
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
         //echo $row['name'] . "\t" . $row['score'] . "\n";
		 echo $row['name'] . "-" . $row['score'] . ".";
    }
?>