<?php
require '../vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$make_data = make_data([1, 2, 3]);

$piped = $make_data->pipe(function ($make_data) {
    return $make_data->sum();
});

echo '<pre>';
print_r($piped);
echo '</pre>';
exit;



