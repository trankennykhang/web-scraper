<?php
namespace Scraper\App\Infrastructure;

use Symfony\Component\DomCrawler\Crawler;
use Scraper\Domain\Base\VirtualCrawler;
use Scraper\Domain\Helper\Filter;
use Scraper\App\Helper\CssSelector;

class PantherCrawler implements VirtualCrawler {

    // Symfony DomCrawler
    private Crawler $crawler; 
    public function __construct()
    {
    }
    public function getValueAt(Filter $filter) {
        // filter method use the CSS style selector
        $text = $this->crawler->filter(CssSelector::convert($filter))->innerText();
        return str_replace("$", "", $text);
    }
    public function convertHtml(string $html){
        $this->crawler = new Crawler($html);
    }
    private function toCssSelector($filter) {

    }
}