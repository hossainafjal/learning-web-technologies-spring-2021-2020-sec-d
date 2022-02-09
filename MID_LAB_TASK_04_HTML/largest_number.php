

<?php
function largest($x, $y, $z) {
  $max = $x;

  if ($x >= $y && $x >= $z)
    $max = $x;
  elseif ($y >= $x && $y >= $z)
    $max = $y;
  else 
    $max = $z;
  
  echo "Largest number among $x, $y and $z is: $max\n";
}

largest(10, 90, 65);
largest(0, 40, 25);
largest(5,300,7);
largest(48,97,34)
?>

