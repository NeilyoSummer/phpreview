<?php

$count = 5;

function getCount()
{
    static $count;
    return $count++;
}

echo $count . PHP_EOL;
++$count;

echo getCount() . PHP_EOL;
echo getCount() . PHP_EOL;