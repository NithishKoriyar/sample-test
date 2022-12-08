

<!DOCTYPE html>
<html>

<body>

  <?php

  $sports =array("football", " cricket" , "vollyball" , "kabaddi", "basketball");


  echo "My favourite games are : ".$sports[0]." ,".$sports[1]." ,".$sports[2]." ,".$sports[3]." and ".$sports[4]." <hr/>";

  for ($x=0; $x<=4; $x++)
  {echo "the number is :$x <br>";}
echo " <hr/>";
//Associative Arrays




$tscore =array ("Jhon"=>"60" , "Bill"=>"80", "Dan" => "75");
echo "Bill scored ".$tscore['Bill']."/100:";
echo "Jhon scored ".$tscore['Jhon']."/100:";
 echo " Dan scored ".$tscore['Dan']."/100:";
echo "<hr/>";


//Loop through an associative array
foreach ($tscore as $x=> $score)
{
  echo "key=" . $x. "score=" .$score;
  echo "<br>";
}
?>

</hlml>
