<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color:rgb(239, 255, 92);
            text-align: center;
            line-height: 30px;
            margin: 5px;
            float : left;
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>


    <?php
        $angka =[
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
    ?>

    <?php foreach($angka as $ang) : ?>
        <?php foreach($ang as $an) :?>
        <div class="kotak"> <?php echo $an ;?> </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>



</body>
</html>