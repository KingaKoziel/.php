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
        <div class="p1">

        <?php
        require_once("../../connect.php");
        $sql = "SELECT * FROM Auta";
        
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
                    echo("<td>".$row['id']."</td><td>".$row['Auto']."</td>");
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
        $sql = "SELECT * FROM Kolor";
        
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
            echo("<th>ID</th><th>Kolor</th>");
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['Kolor']."</td>");
                    echo("</tr>");
                };
            echo("</table>");
            echo ("<br>");

        ?>
        </div>

        <div class="p4">

        <?php
            require_once("../../connect.php");
            $sql = "select Auta, `Kolor`, (`WDW`.ID) as ID_TAB from `kingakoziel_2`.WDW, `kingakoziel_2`.Auto, `kingakoziel_2`.Kolor where Kolor.id=Auta_id and Kolor.id=Kolor_id order by ID_TAB asc";
                if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                 }
                    $result = mysqli_query($conn, $sql);
                if ( $result) {
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            
                echo("<h2>Wiele do Wielu</h2>");
            
                echo("<table border='1'>");
                    while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo("<td>".$row['id_TAB']."</td><td>".$row['Auto']."</td><td>".$row['Kolor']."</td>");
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