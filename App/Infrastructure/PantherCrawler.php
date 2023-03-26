<?php
namespace Scraper\App\Infrastructure;

use Symfony\Component\DomCrawler\Crawler;
use Scraper\Domain\Base\VirtualCrawler;
use Scraper\Domain\Helper\Filter;

class PantherCrawler implements VirtualCrawler {

    // Symfony DomCrawler
    private Crawler $crawler; 
    public function __construct()
    {
    }
    public function getValueAt(Filter $filter) {
        // filter method use the CSS style selector
        $text = $this->crawler->filter($filter->convert());//->innerText();
        print_r($text);
        //return str_replace("$", "", $text);
    }
    public function convertHtml(string $html){
        $this->crawler = new Crawler($html);
    }
}