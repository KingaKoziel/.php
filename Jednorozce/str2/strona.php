<html>
<head>
    <meta charset="UTF-8"/>
<link rel="stylesheet" href="style.css">
        
</head>
    <body>
    <div class="container">
    <div class="nav">
         <a class= "link" href="https://github.com/KingaKoziel/.php">github</a>
      <a class= "link"  href="../../index.php">Strona główna</a>
      <a class= "link" href="../index.html">Cofnij</a>
</div>
        <div class="p1">

        <?php
        require_once("../../connect.php");
        $sql = "SELECT * FROM Kraj";
        
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
            echo("<th>ID</th><th>Kraj</th>");
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<tr>");
                    echo("<td>".$row['id_kraj']."</td><td>".$row['Kraj']."</td>");
                    echo("</tr>");
                };
            echo("</table>");
            echo ("<br>");

        ?>
        </div>
        <div class="p2">

        <?php
        require_once("../../connect.php");
        $sql = "SELECT * FROM Miasto";
        
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
            echo("<th>ID</th><th>Miasto</th>");
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<tr>");
                    echo("<td>".$row['id_miasto']."</td><td>".$row['Miasto']."</td>");
                    echo("</tr>");
                };
            echo("</table>");
            echo ("<br>");

        ?>
        </div>
        <div class="p3">
        <?php
        require_once("../../connect.php");
        $sql = "select * from Kraj, Miasto where id_kraj=id_miasto"; 

$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo('<tr><th>Kraj</th><th>Miasto</th><th>ID</tr></tr>');
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo('<td>'.$row['Kraj'].'</td><td>'.$row['Miasto'].'</td><td>'.$row['id_kraj'].'</td>');     
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