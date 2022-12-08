<!DOCTYPE html>
<html>
<body>
  <?php
  $x=7;
  for($i=1;$i<=$x;$i++)
  {
    for($j=1;$j<=$x;$j++)
    {
      if($i==$j or $i+$j==$x+1) {
          echo "$i";
          } else{
    echo "&nbsp&nbsp&nbsp&nbsp";
  }
}
echo "<br>";
}
    ?>
