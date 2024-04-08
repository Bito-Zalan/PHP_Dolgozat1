<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bitó Zalán</title>
</head>
<body>
    <?php
        $nevek = array ("Nagy Tibor","Szabó Klára","Kovács Tóbiás","Hofi Géza");
        $klubbok = array ("Golf","Póker","Társas","Gémer");
        $meretek = array();
        
    
        for ($i=0; $i < 5; $i++) { 
            $veletlen = rand(10,100);
            array_push($meretek,$veletlen);
        }
        
        

        echo "<table>";
        echo "<tr>
             <th>Név</th>
             <th>Klub neve</th>
             <th>Maximális méretek</th>
             </tr>";
        for ($i=0; $i < count($nevek); $i++) { 
            echo "
            <tr>
            <td>$nevek[$i]</td>
            <td>$klubbok[$i]</td>
            <td>$meretek[$i]</td>
            </tr>";
        }
        echo "</table>";
    
    ?>
    
</body>
</html>