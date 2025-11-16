<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Perkalian</title>
    <style>
        td {
            padding: 3px;
            background-color: lightgreen;
        }
        td.bil {
            background-color: white;
        }
        td.genap {
            background-color: lightskyblue;
        }
        td.ganjil {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h3>Tabel Perkalian 1 sampai 10</h3>
    <table border="1">
        <tr>
            <td class="bil">bilangan</td>
            <?php
                for($i=1; $i<=10; $i++){
                    echo "<td>$i</td>";
                }
            ?>
        </tr>
        <?php
            for($i=1; $i<=10; $i++){
                echo "<tr>";
                echo "<td>$i</td>";
                for($j=1; $j<=10; $j++){
                    $h=$i*$j;
                    if($h%2==0){
                        $w="genap";
                    }else{
                        $w="ganjil";
                    }
                    echo "<td class='$w'>$h</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>