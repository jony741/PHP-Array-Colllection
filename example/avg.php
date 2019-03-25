<?php
require '../vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$make_date = make_data([1, 2, 3, 4, 5, 6]);

list($underThree, $equalOrAboveThree) = $make_date->partition(function ($i) {
    return $i < 3;
});

$underThree->all();
$equalOrAboveThree->all();

echo '<pre>';
print_r($underThree->all());
echo '</pre>';
exit;



