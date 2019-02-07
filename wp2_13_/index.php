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

    <table><?php for ($index1 = 1; $index1 < 11; $index1++) {
   ?> <tr> <?php
                for ($index2 = 1; $index2 < 11; $index2++) {
                    ?> <td> <?php
                        echo $index1 * $index2;
                        ?> </td> <?php }
                    ?> </tr> <?php
        }
        ?>
    </table>    


</html>
