<html>
<head>
<title>QUEEN</title>
</head>

<body bgcolor="white">
<h1><marquee><font color="blue"><b>MOVIE ARENA</b></font></marquee></h1>
<br>
<br>
<h2><font color="red">Queen (U/A)</font></h2>

<table style="width 700px" cellpadding="10" >
<tr>
<td rowspan="5"><img src="queen.jpg"> </td>

  <td><font color="red">Release Date :Mar 7, 2014          Duration :2 hrs 32 mins</font></td>
</tr>
<tr>
  <td><font color="red">Director :Vikas Bahl          Writer :Vikas Bahl, Parvez Sheikh</font></td>
</tr>

<tr>
<td><font color="red">Genre :Comedy, Drama        Language :Hindi</font></td>
</tr>

<tr>
<td><font color="red">Cast & Crew :Lisa Haydon, Rajkummar Rao, Kangana Ranaut</font></td>
</tr>

<tr>
<td><pre><font color="red">story:Rani is a 24-year-old Punjabi woman. Her family is conservative. 
      Her brother escorts her everywhere for her safety.But when her wedding
      is cancelled by her fiance, Rani is shocked and confused,and she decides 
      to take her honeymoon by herself.The story of her wedding does not play a big part.
      The film is mostly about her growing up.She speaks for herself as she discovers her own 
identity.</font></pre>
</td>
</tr>


</table>
<br>
<center><p><u><font color="yellow">IMAGES FOR QUEEN</u></p></center></font>
<br>
<table style="width:700px" cellpadding="10" >


<tr>

<td><img src="images.jpg" </td>
<td><img src="download (1).jpg" </td>
<td><img src="download.jpg" </td>
<td><img src="download (2).jpg" </td>

</tr>

<tr>
<td><img src="download (5).jpg" </td>
<td><img src="download (3).jpg" </td>
<td><img src="images (1).jpg" </td>
<td><img src="images (3).jpg" </td>
</tr>
</table>
<?php

$name=$_POST['na'];
$review=$_POST['rev'];

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("movie") or die(mysql_error());

mysql_query("INSERT INTO review
(Name, Reviews) VALUES('$name', '$review' ) ") 
or die(mysql_error());


$result = mysql_query("SELECT * FROM `review` ORDER BY Id DESC") 
or die(mysql_error());  
$row = mysql_fetch_array( $result );
echo "<table border='1'>";
echo "<tr> <th>Name</th> <th>review</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $row['Name'];
	echo "</td><td>"; 
	echo $row['Reviews'];
	echo "</td></tr>"; 
} 

echo "</table>";

echo "<a href='queen.php'>Back</a>";

?>