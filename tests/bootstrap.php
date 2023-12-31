<?php

/**
 * Copyright (c) Radovan Kepak (radovan@kepak.eu)
 * @license MIT
 */

use Tester\Environment;

if (@!include __DIR__ . '/../vendor/autoload.php') {
	echo 'Install Nette Tester using `composer update --dev`';
	exit(1);
}

// configure environment
Environment::setup();
date_default_timezone_set('Europe/Prague');