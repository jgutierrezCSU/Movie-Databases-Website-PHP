<?php
$servername = "localhost";
$username = "newuser";
$password ="--------";
$db ="db1";


$conn = new mysqli($servername, $username, $password, $db);
$time_start= microtime(true);
$query = "SELECT * FROM movies WHERE primarytitle  = '%The' OR titletype = 'movie'";

$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result))
{
extract($row);
if ($gpa >= 3.6)
$StudentType = "A student";
elseif ($gpa >= 3.2)
$StudentType = "B+ student";
elseif ($gpa >= 2.8)
$StudentType = "B student";
elseif ($gpa >= 2.4)
$StudentType = "C+ student";
else
$StudentType = "C student)";
echo $firstname." ".$lastname." ".$StudentType."\n";
}
$time_end=microtime(true);
$tot_time=($time_end-$time_start);
echo "total execution time is: ".$tot_time."seconds\n";


?>