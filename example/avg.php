<?php
require '../vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$make_data = make_data(['A', 'B', 'C']);

$filtered = $make_data->pad(5, 0);

$filtered->all();
echo '<pre>';
print_r($filtered->all());
echo '</pre>';
exit;



