<?php
use Scraper\Commands\PantherScrapCommand;
use Scraper\Commands\GuzzleScrapCommand;
use Scraper\Commands\SeleniumCommand;

$config = include(__DIR__ . "/config.php");

$app->add(new PantherScrapCommand);
$app->add(new GuzzleScrapCommand);
$app->add(new CurlScrap)
//$app->add(new SeleniumCommand);

?>