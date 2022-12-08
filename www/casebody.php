<!DOCTYPE html>
<html>
<body>
  <?php
  $max = 250;$cut = 16;$reminder=$max%$cut;$repeat = ($max-$reminder)/$cut;
    for($i = 1; $i<=$max; $i++)
  {
    if($i<=9)
    {echo  "&nbsp&nbsp&nbsp&nbsp&nbsp";}
    else if ($i<=99)
     {echo "&nbsp&nbsp&nbsp";}
   else
   { echo "&nbsp";}


 echo $i;
for ($j=1;$j<=$repeat;$j++)
{
  if ($i==$cut)
  {
    $cut=$cut+16;
    echo "<br>";
  }
}

    }
?>
</body>
</html>
