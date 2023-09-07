<?php

use app\commands\TestConnectionCommand;

require "../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/../');
$dotenv->load();