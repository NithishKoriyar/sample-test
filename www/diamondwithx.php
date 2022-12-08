<!DOCTYPE html>
<html>
<body>
  <?php
  $p=20;
  ob_start();
  $buffer =  str_repeat(" ",4096);

for($s=1;$s<=10;$s++)
{

for($y=1;$y<=$p;$y++){  echo "&nbsp";}
    $p=$p-2;
    for($t=2;$t<=$s;$t++)
{
  echo "x&nbsp&nbsp";

//delay part starting
echo $buffer;
ob_flush();
flush();
usleep(500000);
//delay part ending
    }
echo "x<br>";
  }
  //revarse
  $x=2;
  for($rs=9;$rs>=1;$rs--)
  {

    $x=$x+2;
  for($y=1;$y<=$x;$y++)
      {
        echo "&nbsp";
      }
  for($rt=1;$rt<=$rs;$rt++)
  {
  echo  "y&nbsp&nbsp";
  echo $buffer;
  ob_flush();
  flush();
  usleep(500000);
}
  echo "<br>";
}

?>
