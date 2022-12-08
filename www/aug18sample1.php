<!DOCTYPE html>
<html>
<body>
  <?php
  $x = 1;
while($x <=50)
{
  echo "<br>";
  $y = 1;
  while($y <=25)
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
            $y++;
  }
    $x++;
}
  ?>
</body>
</html>
