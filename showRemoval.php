
<?php

if (isset($_POST['submit']))
{

$v_tc = $_POST['tconst'];
$v_tt = $_POST['titletype'];
$v_pt = $_POST['primarytitle'];
require_once('secure/mysqli_connect.php');
	if(v_pt != null){
	$query ="DELETE FROM movies WHERE primarytitle = ?";
$stmt = mysqli_prepare($dbc,$query);
	mysqli_stmt_bind_param($stmt,"s",$v_pt);
	mysqli_stmt_execute($stmt);
	}
	if(v_tc != null){
	$query ="DELETE FROM movies WHERE tconst = ?";
$stmt = mysqli_prepare($dbc,$query);
	mysqli_stmt_bind_param($stmt,"s",$v_tc);
	mysqli_stmt_execute($stmt);
	}
	if(v_tt != null){
	$query ="DELETE FROM movies WHERE titletype = ?";
$stmt = mysqli_prepare($dbc,$query);
	mysqli_stmt_bind_param($stmt,"s",$v_tt);
	mysqli_stmt_execute($stmt);
	}

}
echo "<br> Rows Removed <br>";

echo "$v_pt <br>";

?>