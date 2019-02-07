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
    
        <?php
        $carts [] = array(
            "jablko",
            "hruška",
            "meloun",
            "broskev",
            "khaki",
            "třešně",
            "banán",
            "mandarinka",
            "pomeranč",
            "pomelo",
        );

        $carts [] = array(
            "rajče",
            "okurka",
            "zázvor",
            "mrkev",
            "celer",
            "petržel",
            "brambory",
            "paprika",
            "jk",
            "jj",
        );
        ?>






        <?php
        for ($index = 0; $index < count($carts); $index++) {
            for ($index1 = 0; $index1 < count($carts [index1]); $index1++) {
                
            ?>    
        <h1> Košík 2 <?php   echo $carts [$index1];
                
            }
        }
      ?>  
    
</html>
