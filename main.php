#!/usr/bin/php
<?php

require __DIR__ . '/vendor/autoload.php';

use Command\ApiCommand;


$command = new ApiCommand();

$command->run();
