<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lh = 'localhost';
        $dbName = 'centre_formation';
        $userName = 'root';
        $pwd = 'soukaynabns2024';
        
        $pdo = new PDO("mysql:host=$lh;dbname=$dbName", $userName, $pwd);
        
        $resultat = $pdo->query("select * from etudiant");
        
        $data  = $resultat->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<table border='1'>";
        foreach ($data as $row) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
