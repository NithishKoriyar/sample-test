<!DOCTYPE html>
<html>
<body>
  <?php
  $cars = array("volvo","BMW","Toyota");


  $clength = count ($cars);
  echo "before sort". "<br>";
  for ($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";

  }
  echo "<br>";
  sort($cars);
  echo "aftere sort"."<br>";
  for ($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";

  }
  echo "<br>";
    rsort($cars);
  echo "aftere revarse sort"."<br>";
  for ($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";

  }
  ?>
