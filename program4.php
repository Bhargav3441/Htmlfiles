<?php
 echo"<h1> switch case</h1>";
$favIcecream = "butterscotch";

switch ($favIcecream) {
  case "red":
    echo "Your favorite Icecream is vanila!";
    break;
  case "blue":
    echo "Your favorite Icecream is american nuts!";
    break;
  case "green":
    echo "Your favorite Icecream is cookies&cream!";
    break;
  default:
    echo "Your favorite Icecream is neither vanila, american nuts, nor cookies&cream";
}
?>