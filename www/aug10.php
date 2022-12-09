<!DOCTYPE html>
<html>
<body>

<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $color . "<br>";
echo "My boat is " . $color . "<br>";


$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
$x = 5;
       // global scope
       function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo $cars[0]; echo $cars[1];
echo "<br>";
echo "my favourite car is $cars[0]";
echo "<br>";
echo "my favourite car is $cars[1]";
echo "<br>";

echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));
echo "<br>";
// same as veriable case-sensitive constant name
define ("GREETING", "Welcome to W3schools.com!");
echo GREETING;
$x = 100;
$y = "100";
var_dump($x === $y); // returns false because types are not equal
echo var_dump($Z);

// case-insensitive constant name
define("GREETING", "Welcome to W3Schools.com!", false);
echo 'greeting';

?>

</body>
</html>
