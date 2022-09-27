<?php
use Scraper\App\Commands\PantherScrapCommand;
use Scraper\App\Commands\SeleniumCommand;

$config = include(__DIR__ . "/configuration.php");

$application->add(new PantherScrapCommand);
//$application->add(new SeleniumCommand);

?>