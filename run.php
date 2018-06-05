<?php
$loader = require __DIR__ . '/vendor/autoload.php';

use Tasks\Task99\Task as Task99;

$input = ["123", "124", "56", "90"];
$task = new Task99($input);
$result = $task->getArr();
print_r($result);
