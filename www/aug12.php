<!DOCTYPE html>
<html>
<body>
  <?php



  $cars = array(
    array(
      array("BMW" ,25, 30),
      array("Honda" ,15, 25),
      array("TATA" ,30, 15),
      array("mahindra" ,17, 15)
  ),
    array(
      array("BMW" ,10, 25),
      array("Honda", 27, 13),
      array("TATA", 19, 18),
      array("mahindra", 17, 15)
  )
  );

/*
  echo $cars[0][0].": In stock:".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock:".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock:".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock:".$cars[3][1].", sold: ".$cars[3][2].".<br>";
*/
$tn[0] = "KADABA";$tn[1] = "PUTTUR";
$cn[0] = "Detaile of BMW ";$cn[1] = "Details of Honda";$cn[2] = "Details of TATA";$cn[3] = "Details of mahindra";
for($town=0;$town<2;$town++)

for($town=0;$town<2;$town++)
{
echo "<br>"."<br>".$tn[$town]."<br>"."********";

  for($carname=0;$carname<4;$carname++)
  {
    echo "<br>"."<br>".$cn[$carname]."<br>"."*********"."<br>";
    //echo "Details .$carname";

  for($details=0;$details<3;$details++)
  {
    echo $cars[$town][$carname][$details]; echo " " ;
  }
 }
}

  ?>

</body>
</html>
