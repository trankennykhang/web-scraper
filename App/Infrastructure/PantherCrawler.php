<?php
namespace Scraper\App\Infrastructure;

use Symfony\Component\DomCrawler\Crawler;
use Scraper\Domain\Base\VirtualCrawler;
use Scraper\App\Utilities\Filter;

class PantherCrawler implements VirtualCrawler {

    private Crawler $crawler; 
    public function __construct()
    {
    }
    public function getValueAt(array $selectors) {
        $text = $this->crawler->filter(Filter::toCSSFilterString($selectors))->innerText();
        return str_replace("$", "", $text);
    }
    public function convertHtml(string $html){
        $this->crawler = new Crawler($html);
    }
}