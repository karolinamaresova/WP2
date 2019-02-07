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
        $movies [0]["nazev"] = "Ledové království";
        $movies [0]["zanr"] = "animovaný";
        $movies [0]["delka"] = "102 min.";
        $movies [0]["rok"] = "2013";
        $movies [0]["misto"] = "USA";
        $movies [0]["hodnoceni"] = "76%";

        $movies [1]["nazev"] = "Velký Gatsby";
        $movies [1]["zanr"] = "drama, romantický";
        $movies [1]["delka"] = "142 min.";
        $movies [1]["rok"] = "2013";
        $movies [1]["misto"] = "Austrálie, USA";
        $movies [1]["hodnoceni"] = "73%";

        $movies [2]["nazev"] = "Strážci galaxie";
        $movies [2]["zanr"] = "akční, dobrodružný";
        $movies [2]["delka"] = "116 min.";
        $movies [2]["rok"] = "2014";
        $movies [2]["misto"] = "USA,Velká Británie";
        $movies [2]["hodnoceni"] = "81%";

        $movies [3]["nazev"] = "Deadpool";
        $movies [3]["zanr"] = "komedie, sci-fi";
        $movies [3]["delka"] = "108 min.";
        $movies [3]["rok"] = "2016";
        $movies [3]["misto"] = "USA";
        $movies [3]["hodnoceni"] = "81%";
        $movies [3]["actress"] = array("Ryan Reynolds",
            "Morena Baccarin",
            "Ed Skrein")
        ?>
        <?php for ($i = 0; $i < count($movies); $i++) { ?> Název: <?php
            echo $movies [$i]["nazev"];
            echo "<br>"
            ?>
            <?php
            foreach ($movies [$i]["actress"]as $key => $value) {
                echo $value;
            } ?>
            Žánr: <?php
            echo $movies [$i]["zanr"];
            echo "<br>"
            ?>
            Délka: <?php
            echo $movies [$i]["delka"];
            echo "<br>"
            ?>
            Rok: <?php
            echo $movies [$i]["rok"];
            echo "<br>"
            ?>
            Místo: <?php
            echo $movies [$i]["misto"];
            echo "<br>"
            ?>
            Hodnocení: <?php
            echo $movies [$i]["hodnoceni"];
            echo "<br>"
            ?>
            <?php
        }
        ?>
        


</html>
