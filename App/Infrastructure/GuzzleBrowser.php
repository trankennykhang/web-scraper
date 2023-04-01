<?php
namespace Scraper\App\Infrastructure;

use Scraper\Domain\Base\VirtualBrowser;
use Symfony\Component\Panther\Client;

class GuzzleBrowser implements VirtualBrowser {

    private $client;
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }
    public function loadPage(string $url) {
        $crawler = $this->client->request("GET", $url);
        sleep(10);
        return $crawler->getBody();
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
    public static function createGuzzleBrowser() {
        return new GuzzleBrowser();
    }
}