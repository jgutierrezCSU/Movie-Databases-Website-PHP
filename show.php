
<?php
// Get a connection for the database
require_once('secure/mysqli_connect.php');
//echo 'Test debug';
// Create a query for the database
$query = "SELECT primarytitle , titletype FROM movies limit 10";
// Get a response from the database by sending the connection and the query
$response = @mysqli_query($dbc, $query);
// If the query executed properly proceed
if($response){
 echo '<table align="left"
 cellspacing="5" cellpadding="8">
 <tr><td align="left"><b>Title of Movie to Insert</b></td>
 <td align="left"><b>Type of Movie <br>( movie , short , miniSeries , TVepisode )</b></td>';
 // mysqli_fetch_array returns row of data until no further data is available
 while($row = mysqli_fetch_array($response)){
 echo '<tr><td align="left">' .
 $row['primarytitle'] . '</td><td align="left">' .
 $row['titletype'] . '</td><td align="left">';
 echo '</tr>';
 }
 echo '</table>';
} else {
 echo "Couldn't issue database query<br />";
 echo mysqli_error($dbc);
}
// Close connection to the database
mysqli_close($dbc);
?>