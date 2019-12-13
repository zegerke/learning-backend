<?php
    function addRows(){
        $rows = $_GET["number"];
        for ($i=0; $i < $rows; $i++) { 
            echo "<tr> \n";
            for ($ii=0; $ii < 4; $ii++) { 
                echo "<td>wAcK</td> \n";
            }
            echo "</tr>";
        };     
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>phpwoooooooooooooooo</title>
</head>
<body>
    <form action="" method="get">
    <label for="">rownumbers</label>
    <input name="number" value="0" type="number">
    </form>
    <table >
    <tr>
    <th>Your GF</th>
    <th>Your House</th>
    <th>Your Job</th>
    <th>Your Skills</th>
    </tr>
    <?php addRows() ?>
    </table>
</body>
</html>