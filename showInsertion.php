
<?php

if (isset($_POST['submit']))
{
$v_tc = $_POST['tconst'];
$v_tt = $_POST['titletype'];
$v_pt = $_POST['primarytitle'];
require_once('secure/mysqli_connect.php');

	$query ="INSERT INTO movies (tconst,titletype,primarytitle)
VALUES (?,?,?)";
$stmt = mysqli_prepare($dbc,$query);
	mysqli_stmt_bind_param($stmt,"sss",$v_tc,$v_tt,$v_pt);
	mysqli_stmt_execute($stmt);

}
echo "<br> Rows inserted <br>";
echo "$v_tc <br>";
echo "$v_tt <br>";
echo "$v_pt <br>";

?>