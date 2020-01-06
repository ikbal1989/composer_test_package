<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Ikbal\PhpUtill\ArrayModifier;

echo ArrayModifier::totalItem([1,2,3,4,5,6]);
