<?php

$total_minutes = 318;
$minutes = $total_minutes % 60;

$hours = floor($total_minutes / 60);

//intdiv(divisor, divider) can be used for division in PHP
echo "$hours hours, $minutes minutes";


