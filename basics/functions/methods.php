<?php

$version = phpversion();
$developer = "ekeopre";

$title = "PHP KING";
$changeToUpperCase = strtoupper($version);
echo "$version" . PHP_EOL;
echo " " . PHP_EOL;

echo "=====To uppercase====" . PHP_EOL;
echo "$changeToUpperCase" . PHP_EOL;

echo " " . PHP_EOL;

echo "=====uc first====" . PHP_EOL;
$changeToCapitalize = ucfirst($developer);
echo "$changeToCapitalize" . PHP_EOL;
echo " " . PHP_EOL;

echo "===== lowercase then uc first====" . PHP_EOL;

echo  ucfirst(strtolower($title));

