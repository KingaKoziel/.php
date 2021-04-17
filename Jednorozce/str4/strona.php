<html>
<head>
    <meta charset="UTF-8"/>
<link rel="stylesheet" href="style.css">
        
</head>
    <body>
    <div class="container">
    <div class="nav">
     
         <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-KingaKoziel.git">github</a>
      <a class= "link" href="../../index.php">Strona główna</a>
      <a class="link" href="../index.html">Cofnij</a>
</div>

        <div class="p1">1</div>
        <div class="p2">
        <?php
        require_once("../../connect.php");
        $sql = "SELECT * FROM Imie";
        
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
            echo("<th>ID</th><th>Imie</th>");
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<tr>");
                    echo("<td>".$row['id_imie']."</td><td>".$row['Imie']."</td>");
                    echo("</tr>");
                };
            echo("</table>");
            echo ("<br>");

        ?>
          </div>
        <div class="p3">3</div>
          <div class="p4">
            
            <?php
        require_once("../../connect.php");
        $sql = "SELECT * FROM Rola";
        
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
            echo("<th>ID</th><th>Rola</th>");
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<tr>");
                    echo("<td>".$row['id_rola']."</td><td>".$row['Rola']."</td>");
                    echo("</tr>");
                };
            echo("</table>");
            echo ("<br>");

        ?>
        </div>

        <div class="p5">
        <?php
        require_once("../../connect.php");
        $sql = "select * from Imie, Rola where id_imie=id_rola"; 

$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Pracownik</th><th>Zawód</th><th>ID</tr></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['Imie'].'</td><td>'.$row['Rola'].'</td><td>'.$row['id_imie'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
              ?>
       </div>  
    </div>
    </body>
</html>
