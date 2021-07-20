<?php


function getAvailableRoles(): array {
    return ['read', 'update'];
}

$user = [
    'name' => 'Jhon',
    'age' => '23',
    'role' => ['delete', 'create', 'read'],
];


$roles = getAvailableRoles();
$count = 0;

foreach ($user['role'] as $item) {
    if (in_array($item, $roles, true)) {
       echo 'Granted' . PHP_EOL;
       $count++;
    }
}

if ($count === 0) {
    echo 'poshel naxyu' . PHP_EOL;
}

