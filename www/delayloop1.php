<!DOCTYPE html>
  <html>
  <body>
  <?php
ob_start();
$buffer = str_repeat(" ", 4096);

for($i=1;$i<=5;$i++)
{
  echo $buffer . $i;
  ob_flush();
  flush();
  sleep(3);
}

    ?>
</body>
</html>
