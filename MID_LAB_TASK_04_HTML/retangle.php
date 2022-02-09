<?php
$price = 100; //product price
$vat = 15; // 15% vat

echo"product price after including vat is= " .round($price * (($vat / 100) + 1), 2);
?>