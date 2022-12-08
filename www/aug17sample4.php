<!DOCTYPE html>
<html>
<body>
  <?php
for($x = 1; $x <=65; $x++)
{
  echo "<br>";
  for($y = 1; $y <=25; $y++)
  {
        $r =$x*$y;
        if ($r<=9)//it is used marking tha row and collum in correct space if there is less than 9 it will go
        {
            echo " &nbsp ";
        }
        if($r<=99)
        {
          echo  "  &nbsp  ";
        }
        if($r<=999)
        {
          echo  "&nbsp  ";
        }
            echo " $r&nbsp  ";//&nbsp is used for the code for making space in php and html/
  }
}
  ?>
</body>
</html>
