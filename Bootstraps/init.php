<?php
use Scraper\Commands\PantherScrapCommand;
use Scraper\Commands\SeleniumCommand;

$config = include(__DIR__ . "/configuration.php");

$application->add(new PantherScrapCommand);
//$application->add(new SeleniumCommand);

?>