<?php

echo "<a href='session-test.php'>Session Test</a>";

echo "<br/>---TEST ECHO---<br>";
$txt1 = "Learn PHP";
$txt2 = "Hello World";
$x = 5;
$y = 4;

echo "<h2>$txt1</h2>";
echo "Study PHP at $txt2<br>";
echo $x + $y;

echo "----TEST While----<br>";

$x = 1; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 

echo "---TEST Multidimensional Array---<br>";

$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
 
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

?>