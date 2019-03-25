<?php
require '../vendor/autoload.php';

$make_data = make_data([
    ['account_id' => 'account-x10', 'product' => 'Chair'],
    ['account_id' => 'account-x10', 'product' => 'Bookcase'],
    ['account_id' => 'account-x11', 'product' => 'Desk'],
]);

$grouped = $make_data->groupBy('account_id');

echo '<pre>';
print_r($grouped->toArray());
echo '</pre>';
exit;
