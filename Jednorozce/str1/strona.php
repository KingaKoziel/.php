<html>
<head>
    <meta charset="UTF-8"/>
<link rel="stylesheet" href="style.css">
        
</head>
    <body>
    <div class="container">
    <div class="nav">
         <a class= "link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-KingaKoziel.git">github</a>
      <a class= "link" href="../../index.php">Strona główna</a>
      <a class= "link" href="../index.html">Cofnij</a>
</div>

        <div class="p1">

        <?php
        require_once("../../connect.php");
        $sql = "SELECT * FROM Auto";
        
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
            echo("<th>ID</th><th>Auto</th>");
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<tr>");
                    echo("<td>".$row['id_auto']."</td><td>".$row['Auto']."</td>");
                    echo("</tr>");
                };
            echo("</table>");
            echo ("<br>");

        ?>
        </div>
        <div class="p2">2</div>
        <div class="p3">
        <?php
        require_once("../../connect.php");
        $sql = "SELECT * FROM Mechanik";
        
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
            echo("<th>ID</th><th>Machenik</th>");
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<tr>");
                    echo("<td>".$row['id_mechanik']."</td><td>".$row['Mechanik']."</td>");
                    echo("</tr>");
                };
            echo("</table>");
            echo ("<br>");

        ?>
        </div>

          <div class="p4"> 
        <?php
        require_once("../../connect.php");
        $sql = "select * from Auto, Mechanik where id_auto=id_mechanik"; 
echo("<h3>Kolor Auta</h3>"); 
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Auto</th><th>Mechanik</th><th>ID</th></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['Auto'].'</td><td>'.$row['Mechanik'].'</td><td>'.$row['id_auto'].'</td>');     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
              ?>
       </div>  
        <div class="p5">5</div>      
    </div>
    </body>
</html>
