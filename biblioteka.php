<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
	  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-KingaKoziel">github</a><br>
	  <div class="nav">
      <a href="index.php">Strona Główna</a>
    </div>
<?php 
	
	require_once("connect.php");
    echo ('<h2>Nowa lista pracowników<h2>');
	$sql ="select * from biblTytul";
$result = mysqli_query($conn, $sql);
if ( $result) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<select name="tytul">');
	while($row = mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['ID'].'">';
	    echo($row['tytul']);
 	    echo "</option>";
	}
		
require_once("connect.php");
  echo("<h3>Tytuły</h3>"); 
$sql = "select * from biblTytul";
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>id</th><th>tytul</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
  echo("<tr>");     
  echo("<tr>");   
 echo ('<td>'.$row["id"].'</td><td>'.$row["tytul"].'</td>');
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>');
	
		  echo("<h3>Autorzy</h3>"); 
$sql = "select * from biblAutor";
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>id</th><th>autor</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
  echo("<tr>");     
  echo("<tr>");   
 echo ('<td>'.$row["id"].'</td><td>'.$row["autor"].'</td>');
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?> 
