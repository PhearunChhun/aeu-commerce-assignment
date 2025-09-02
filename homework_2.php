<?php
// Problem 1: Rectangle perimeter and area
$length = 900;
$width = 50 + 50 + 800; // Sum of sections
$perimeter = 2 * ($length + $width);
$area = $length * $width;

// Problem 2: Variable expressions
$a = 2;
$b = 3;
$c = 4;
$d = 5;

$expr1 = pow($a, 3) + pow($b, 3) + 2 * $a * $b;
$expr2 = ($a + $b) * ($a + $b + $c + $d);
$expr3 = ($a * $b) + ($b * $c) + ($c * $d);

// Problem 3: Triangle geometry
$base = 10;
$height = 6;
$side1 = 8; // example side lengths
$side2 = 9;

$triangle_perimeter = $base + $side1 + $side2;
$triangle_area = 0.5 * $base * $height;

// Output
echo "Problem 1:\n";
echo "Width = $width m\n";
echo "Perimeter = $perimeter m\n";
echo "Area = $area m^2\n\n <br> <hr>";

echo "Problem 2:\n";
echo "a^3 + b^3 + 2ab = $expr1\n";
echo "(a + b)(a + b + c + d) = $expr2\n";
echo "ab + bc + cd = $expr3\n\n  <br> <hr>";

echo "Problem 3:\n";
echo "Perimeter = $triangle_perimeter\n";
echo "Area = $triangle_area\n  <br> <hr>";
?>
