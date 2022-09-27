<?php
namespace Scraper\App\Commands;

use Scraper\Domain\VirtualBrowser;
use Symfony\Component\Panther\Client;

class PantherBrowser implements VirtualBrowser {

    private $client;
    public function __construct()
    {
        $this->client = Client::createChromeClient("/var/www/html/chromedriver", [
            '--headless',
            '--no-sandbox',
            '--disable-dev-shm-usage',
        ]);
    }
    public function loadPage(string $url) {
        $crawler = $this->client->request("GET", $url);
        return $crawler->html();
    }
    public function waitFor(string $tag) {
        $this->client->waitFor($tag);
    }
    public function submitForm()
    {
        
    }
    public function clickLink()
    {
        
    }
    public static function createChromePantherBrowser() {
        return new PantherBrowser();
    }
}