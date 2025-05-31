<?php
//pengulangan
//for
//while
//do... while
//foreach : pengulangan array




//for($i = 0; $i < 5; $i++ ) {
//    echo "haii <br>";
//}


//$i = 0;
//while($i < 5){
//    echo "haii <br>";
//    $i++;
//}
    


//melakukan awal 1 saja

//$i = 0;
//do {
//    echo "haii <br>";
//    $i++;
//} while ($i < 5 );

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>

<body>
    <table border="1">
        <?php
            for($i = 1; $i <= 3; $i++){
                echo "<tr>";
                for($j = 1; $j <= 5; $j++){
                    echo "<td>$i, $j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>



    <table border = "1">
        <?php for($i = 1; $i <= 3 ; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php endfor;?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>