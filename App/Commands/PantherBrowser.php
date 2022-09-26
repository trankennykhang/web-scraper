<?php
namespace Scraper\App\Commands;

use Scraper\Domain\VirtualBrowser;
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
    public function submitForm()
    {
        
    }
    public function clickLink()
    {
        
    }
}