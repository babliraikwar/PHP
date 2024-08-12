<?php
$a=20;
$b=10;
$c=40;
echo "<i><u>arithmatic operator</u></i><br>";
echo "<br>";
echo "a+b="." ".$a+$b."<br>";
echo "a-b="." ".$a-$b."<br>";
echo "a*b="." ".$a*$b."<br>";
echo "a%b="." ".$a%$b."<br>";
echo "a/b="." ".$a/$b."<br>";
echo "<br>";
echo "<br>";

echo "<u>logical operator </U><br>";
echo "<br>";
echo "(a+b) && (a*b)="." ".(($a>$b)or($a<$c))."<br>";
echo "(a+b) && (a*b)="." ".(($a>$b) &&($a<$c))."<br>";
echo "(a+b) && (a*b)="." ".(($a<$b)&&($a<$c))."<br>";
echo "<br>";

echo "<i><u>assignment operator</u></i><br>";
echo "<br>";

$a=+2;
echo "a=+2  =".$a ."<br>";
$b=+2;
echo "b=+2  =".$b ."<br>";

?>
