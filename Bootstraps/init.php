<?php
use Kupman\Scraper\Commands\PantherCommand;
use Kupman\Scraper\Commands\SeleniumCommand;

$application->add(new PantherCommand);
$application->add(new SeleniumCommand);

?>