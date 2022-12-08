<!DOCTYPE html>

<html>
<body>
  <?php
  $p=20;
for($s=1;$s<=9;$s++)
{
for($y=1;$y<=$p;$y++)
  {
    echo "&nbsp";
}
    $p=$p-2;
    for($t=2;$t<=$s;$t++)
    if($s<=9){echo "x&nbsp&nbsp&nbsp";}
    else { echo "x&nbsp";}
    echo "x<br>";
      }
  $x=2;
  for($rs=9;$rs>=1;$rs--)
  {
    $x=$x+2;
  for($y=1;$y<=$x;$y++)
      {
        echo "&nbsp";
      }
  for($rt=1;$rt<=$rs;$rt++)
  if($rs<=9){echo  "y&nbsp&nbsp&nbsp";}
  else { echo  "y&nbsp";}
  echo "<br>";

}
?>
