<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload



$TQ= new Pcntl\ThreadQueue(function(){echo rand()."\n";},2);

print_r($TQ);