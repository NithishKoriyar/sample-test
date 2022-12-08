<!DOCTYPE html>
<html>
<body>
  <?php

  $n=0;
  do {
    $n++;
  $s=1;
  echo "multiplication tebal of $n is as follow";
  do
  {
    $r=$n*$s;
    echo"$n x$s =$r";
    echo "<br><hr/>";
      $s++;
    }
while($s<=10);

} while($n<=5);

?>
</body>
</html>
