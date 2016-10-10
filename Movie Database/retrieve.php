<?php

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("movie") or die(mysql_error());



$result = mysql_query("SELECT * FROM reviews")
or die(mysql_error());  

// store the record of the "example" table into $row
$row = mysql_fetch_array( $result );
// Print out the contents of the entry 




$result = mysql_query("SELECT * FROM reviews") 
or die(mysql_error());  
echo "<table border='1'>";
echo "<tr> <th>Name</th> <th>review</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $row['name'];
	echo "</td><td>"; 
	echo $row['review'];
	echo "</td></tr>"; 
} 

echo "</table>";



?>