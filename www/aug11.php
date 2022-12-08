<!DOCTYPE html>
<html>
<body>
  <?php

$state = array("andra pradesh" => "jagan reddy", "arunachal pradesh"=>"pema khandu","assam"=>"himanta biswa sarma","bihar"=>"nitish","delhi"=> "aravind");
echo "<hr/>";
echo "india states cm";
echo "<hr/>";
foreach($state as $y=>$minister){

  echo  $y ." = " .$minister;
  echo "<br>";
  echo "<hr/>";
}

echo "<hr/>";
echo "<br/>";


$cars = array (
  array("volvo" ,22,18),
  array("BMW" ,15,13),
  array("saab" ,5,2),
  array("Land Rover" ,17,15),
);

echo $cars[0][0].": In stock:".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock:".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock:".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock:".$cars[3][1].", sold: ".$cars[3][2].".<br>";

echo "<hr/>";
echo "<br/>";

$values = [
     "message" => "HELLO world!",
      "count" => 150,
      "pi" => 3.14,
      "ststus" => false,
      "result" => null
    ];
    var_dump($values);

    echo "<hr/>";
    echo "<br/>";

    $articles = [
      ["title" => "First post", "content" => "This is the first post"],
      ["title" => "Another post", "content" => "Another post to read here"],
      ["title" => "Read this!", "content" => "You must read this article!"]
    ];
    var_dump($articles);


    echo "<hr/>";
    echo "<br/>";

    for($row = 0; $row < 4; $row++) {
      echo "<p><b>Row number $row</b></p>" ;
      echo "<ul>";
      for ($col = 0; $col <3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
      }
      echo "</ul>";
    }
    ?>

?>

</body>
</html>
