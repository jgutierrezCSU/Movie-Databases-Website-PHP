
<?php
if(isset($_POST['submit']))
{
	//declarin passed value from Radio form
  $drop_value = $_POST['orderby'];
  echo "Sorting By $drop_value  Region" ;

require_once('secure/mysqli_connect.php');


$query = "call proc1('$drop_value')" ;
//$stmt = mysqli_prepare($dbc,$query);
//mysqli_stmt_bind_param($stmt,"s",$radio_value);
//mysqli_stmt_execute($stmt);

$response = @mysqli_query($dbc, $query);

if($response){
 echo '<table align="left"
 cellspacing="5" cellpadding="8">
 <tr><td align="left"><b>tconst </b></td>
 <td align="left"><b>titletype</b></td>
 <td align="left"><b>primarytitle</b></td>';
 
 while($row = mysqli_fetch_array($response)){
 echo '<tr><td align="left">' .
 //$row['movieAddedTitle'] . '</td><td align="left">' .
 $row['tconst'] . '</td><td align="left">' .
 $row['titletype'] . '</td><td align="left">' .
  $row['primarytitle'] . '</td><td align="left">';
 echo '</tr>';
 }
 echo '</table>';
} else {
 echo "Couldn't issue database query<br />";
 echo mysqli_error($dbc);
}
}

mysqli_close($dbc);


?>