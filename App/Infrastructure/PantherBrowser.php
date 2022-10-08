<?php
namespace Scraper\App\Infrastructure;

use Scraper\Domain\Base\VirtualBrowser;
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
        sleep(10);
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