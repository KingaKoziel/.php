<html>
<head>
    <meta charset="UTF-8"/>
<link rel="stylesheet" href="style.css">
        
</head>
    <body>
     
         <a href="https://github.com/KingaKoziel/.php">github</a>
  
        <div class="nav">
      <a href="../../index.php">Strona główna</a>
      <a href="../index.html">Cofnij</a>
      <div class="container">
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
                    echo("<td>".$row['id']."</td><td>".$row['Imie']."</td>");
                    echo("</tr>");
                };
            echo("</table>");
            echo ("<br>");

        ?>
          </div>
        <div class="p3">3</div>
          <div class="p4">4</div>
            
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
                    echo("<td>".$row['id']."</td><td>".$row['Rola']."</td>");
                    echo("</tr>");
                };
            echo("</table>");
            echo ("<br>");

        ?>
        </div>

        <div class="p5">5</div> 
    </div>
    </body>
</html>
