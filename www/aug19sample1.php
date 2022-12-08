<!DOCTYPE html>
<html>
<body>

<?php

$i = 2; $x = 0; $y =1;
echo $x . "<br>";
echo $y."<br>";
while($i<=10)
{
  $r=$x+$y;
  echo $r;
  $x=$y;
  $y=$r;

echo "<br>";
$i++;
}
?>


</body>
</html>
