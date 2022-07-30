<?php
require __DIR__.'/vendor/autoload.php'; // Composer's autoloader

use Symfony\Component\Panther\Client;

$client = Client::createChromeClient();


$client->request('GET', 'https://www.marketindex.com.au/asx/cba'); // Yes, this website is 100% written in JavaScript

$client->wait(5);
$crawler = $client->waitForVisibility('#installing-the-framework');

echo $crawler->filter('#installing-the-framework')->text();
$client->takeScreenshot('screen.png'); // Yeah, screenshot!