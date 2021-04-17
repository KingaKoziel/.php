<html>
<head>
    <meta charset="UTF-8"/>
<link rel="stylesheet" href="style.css">
        
</head>
    <body>
    <div class="container">
    <div class="nav">
         <a class= "link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-KingaKoziel.git">github</a>
      <a class= "link"  href="../../index.php">Strona główna</a>
      <a class= "link" href="../index.html">Cofnij</a>
</div>
        <div class="p1">

        <?php
        require_once("../../connect.php");
        $sql = "SELECT * FROM Nazwisko";
        
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
        
            $result = mysqli_query($conn, $sql);
            if ( $result) {
                 echo "<br>";
             } else {
               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
        
            echo("<table border='1'>");
            echo("<th>ID</th><th>Lekarz</th>");
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<tr>");
                    echo("<td>".$row['id_nazwisko']."</td><td>".$row['Nazwisko']."</td>");
                    echo("</tr>");
                };
            echo("</table>");
            echo ("<br>");

        ?>
        </div>
        <div class="p2">

        <?php
        require_once("../../connect.php");
        $sql = "SELECT imie, dzial FROM pracownicy";
        
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
        
            $result = mysqli_query($conn, $sql);
            if ( $result) {
                 echo "<br>";
             } else {
               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
        
            echo("<table border='1'>");
            echo("<th>ID</th><th>Pacjent</th>");
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<tr>");
                    echo("<td>".$row['dzial']."</td><td>".$row['imie']."</td>");
                    echo("</tr>");
                };
            echo("</table>");
            echo ("<br>");

        ?>
        </div>
        <div class="p3">
        <?php
        require_once("../../connect.php");
        $sql = "select * from Nazwisko, pracownicy where id_Nazwisko=dzial"; 

$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Lekarz</th><th>Pacjent</th><th>ID</tr></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['Nazwisko'].'</td><td>'.$row['imie'].'</td><td>'.$row['id_nazwisko'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
              ?>
       </div> 
        <div class="p4">4</div>
        <div class="p5">5</div>
        <div class="p6">6</div>   
    </div>
    </body>
</html>