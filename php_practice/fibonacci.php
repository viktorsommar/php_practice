<?php

$firstnumber = 0;
$secondnumber = 1;

for ($i = 0; $i <= 100; $i++) {

$firstnumber = $firstnumber + $secondnumber;
$secondnumber = $firstnumber + $secondnumber;

echo " " . $firstnumber . " " . $secondnumber . " ";
}
?>