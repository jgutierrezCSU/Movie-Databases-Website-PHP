
<?php


if(!isset($_COOKIE["type"]))
{
 header("location:login.php");
}

?>


<html>
<title> INSERT MOVIES </title>
<body>
<?php
?>
<h1> INSERT NEW MOVIE TO DATABASE <h1>

<h3> Quick Link : Order by Most or Least popular <h3>
	 <form method="post" action="http://localhost/finalProj/DropDownShow.php">
<select name="orderby" >
  <option value="US">US</option>
  <option value="FR">France</option>
  <option value="RU">Russia</option>
  <option value="MX">Mexico</option>
  <option value="DE">Germany</option>
  <option value="JP">Japan</option>
 </select>
 <input type="submit" name="submit" value="Show Me!">
</form>

<br><br><br><br>

<form action="http://localhost/finalProj/enterToDB.php">
  <input type="submit" value="Add Movies">
</form>
<form action="http://localhost/finalProj/show.php">
  <input type="submit" value="Show Movies">
</form>
<form action="http://localhost/finalProj/removeBy.php">
  <input type="submit" value="Remove from Database">
</form> 
 <form action="http://localhost/finalProj/ShowCurActivities.php">
 <input type="submit" value="ShowCurActivities">
</form>
  <form action="http://localhost/finalProj/cookies1.php">
 <input type="submit" value="testcookies">
</form>

<form method="post" action="http://localhost/finalProj/ShowFromRadio.php">
<p>Choose here to See all movies by specific Category:</p>
  <input type="radio" name="sortby" value="movie"> Movie <br>
  <input type="radio" name="sortby" value="short"> Short Movie <br>
  <input type="radio" name="sortby" value="tvSeries"> TV series <br>  
  <input type="radio" name="sortby" value="tvepisod"> TV Episode <br>  
  <input type="submit" name ="submit" value="submit">
</form>

</body>

</html>



