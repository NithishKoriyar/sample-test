<!DOCTYPE html>
<html>
<body>
  <?php
  ob_start();
  $buffer = str_repeat(" ", 4096);
  $letters= array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o",
"p","q","r","s","t","u","v","w","x","y","z");
for($i=0;$i<26;$i++)
{
$l=$letters[$i];
$ul=strtoupper($l);
    echo "&nbsp&nbsp";
    //echo ($letters[$i]);
    //echo '<p id="abc" style="color:blue;font-weight:bold font-family:sans-serif;"> "$ul.&nbsp</p>"
      echo '<p id="abc"> <?php echo $ul; </p>

    <script type="text/javascript">
        var blink =document.getElementById("abc");

        setInterval(function () {
            bli.style.opacity =
            (bli.style.opacity == 0 ? 1 : 0);
        }, 500);
    </script>



    echo strtoupper("$letters[$i]");
}
for($i=0;$i<26;$i++)
{
  echo $buffer . $i;
  ob_flush();
  flush();
  sleep(3);
      echo "&nbsp&nbsp";
    echo strtolower("$letters[$i]");

}

?>
</body>
</html>
