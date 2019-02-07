<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        define("ROWS_COUNT", 10);
        define("COLS_COUNT", 10);


        for ($index = 0; $index < ROWS_COUNT; $index++) {
            for ($index1 = 0; $index1 < COLS_COUNT; $index1++) {
                $array[$index][$index1] = rand(0, 100);
            }
        }

        $pickArray[] = array(1, 1);
        $pickArray[] = array(5, 3);
        $pickArray[] = array(7, 2);
        $pickArray[] = array(9, 1);
        $pickArray[] = array(2, 5);

$sum=0;
        for ($index2 = 0; $index2 < count($pickArray); $index2++) {
            $sum += $array[$pickArray[$index2][0]][$pickArray[$index2][1]];
        }

        echo $sum;
        ?>
    </body>
</html>
