<?php

require_once('secure/mysqli_connect.php');


$query = "SELECT * FROM MOVIES_AUDIT ";

$response = @mysqli_query($dbc, $query);

if($response){
 echo '<table align="left"
 cellspacing="5" cellpadding="8">
 <tr><td align="left"><b>Title of Movie </b></td>
 <td align="left"><b>Time Modified</b></td>';
 
 while($row = mysqli_fetch_array($response)){
 echo '<tr><td align="left">' .
 $row['movieAddedTitle'] . '</td><td align="left">' .
 $row['changedate'] . '</td><td align="left">';
 echo '</tr>';
 }
 echo '</table>';
} else {
 echo "Couldn't issue database query<br />";
 echo mysqli_error($dbc);
}

mysqli_close($dbc);
?>