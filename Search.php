<?php 
 
 if ($searching =="yes") 
 { 
 echo "<h2>Results</h2><p>"; 
 

 if ($find == "") 
 { 
 echo "<p>You forgot to enter a search term"; 
 exit; 
 } 
 
 
 mysql_connect("localhost", "root") or die(mysql_error()); 
 mysql_select_db("summary") or die(mysql_error()); 
 
 
 $find = strtoupper($find); 
 $find = strip_tags($find); 
 $find = trim ($find); 
 
 
 $data = mysql_query("SELECT * FROM users WHERE upper($field) LIKE'%$find%'"); 
 

 while($result = mysql_fetch_array( $data )) 
 { 
 echo $result['uname']; 
 echo " "; 
 echo $result['email']; 
 echo "<br>"; 
 
 echo "<br>"; 
 } 
 
 
 $anymatches=mysql_num_rows($data); 
 if ($anymatches == 0) 
 { 
 echo "Sorry, but we can not find an entry to match your query<br><br>"; 
 } 
 
 echo "<b>Searched For:</b> " .$find; 
 } 
 ?> 