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
   echo("<h3> TYTULY </h3>");
$sql = "SELECT * FROM bibl_tytul";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ID</th><th>ksiazka</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["id_tytul"].'</td><td>'.$row["tytul"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
	
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
