<?php
namespace Kupman\Scraper\Commands;

use Kupman\Scraper\Domain\VirtualBrowser;
use Symfony\Component\Panther\Client;

class PantherBrowser implements VirtualBrowser {

    private $client;
    public function __construct()
    {
        $this->client = Client::createChromeClient();
    }
    public function loadPage(string $url) {
        $crawler = $this->client->request("GET", $url);
        return $crawler->html();
    }
}