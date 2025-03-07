#!/usr/bin/env php
<?php
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$app = new Application();

require __DIR__.'/Bootstraps/autoload.php';
require __DIR__.'/Bootstraps/init.php';

$app->run();

?>