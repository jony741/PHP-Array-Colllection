<?php
require '../vendor/autoload.php';
$average = make_data([['foo' => 10], ['foo' => 10], ['foo' => 20], ['foo' => 40]])->avg('foo');

echo "The average: ".$average;
