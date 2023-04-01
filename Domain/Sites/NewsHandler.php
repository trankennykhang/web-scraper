<?php
namespace Scraper\Domain\Sites;

use Scraper\Domain\Base\SiteHandler;
use Scraper\Domain\Base\VirtualCrawler;
use Scraper\Domain\Helper\Filter;

class NewsHandler extends SiteHandler {
    
    public string $endpoint = "https://news.com.au";
    
    public function query(string $symbol) {

        $html =  $this->browser->loadPage($this->buildUrl($symbol));
        // use php query or similar to query the data
        print_r($html);
    }
    public function headline(string $symbol) {
        //$symbol .= ".AX";
        $html = $this->browser->loadPage($this->buildUrl($symbol));
        $this->crawler->convertHtml($html);
        $filter = Filter::getInstance();
        $filter->setConverter($this->converter);
        $filter->addFilterArray([
            'tag' => 'article',
            'class' => 'group0',
        ]);
            
        $value = $this->crawler->getValueAt($filter);
        return 123;//clear$value;
        
    }
    protected function buildUrl(string $symbol) {
        return $this->endpoint;
    }
}