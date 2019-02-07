<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php

$firstname = filter_input(INPUT_POST, 'firstname');
$surname = filter_input(INPUT_POST, 'surname');
$age = filter_input(INPUT_POST, 'age');
$gender= filter_input(INPUT_POST, 'gender');


echo "$firstname";
echo "<br>";
echo "$surname";
echo "<br>";
echo "$age";
echo "<br>";
echo "$gender";

   ?>
  </body>
</html>
