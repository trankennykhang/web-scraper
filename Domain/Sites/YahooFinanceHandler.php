<?php
namespace Scraper\Domain\Sites;

use Scraper\Domain\Base\SiteHandler;
use Scraper\Domain\Base\VirtualCrawler;
use Scraper\Domain\Helper\Filter;

class YahooFinanceHandler extends SiteHandler {
    
    public string $endpoint = "https://www2.asx.com.au/markets/company/";
    
    public function query(string $symbol) {

        $html =  $this->browser->loadPage($this->buildUrl($symbol));
        // use php query or similar to query the data
        print_r($html);
    }
    public function price(string $symbol) {
        //$symbol .= ".AX";
        $html = $this->browser->loadPage($this->buildUrl($symbol));
        $this->crawler->convertHtml($html);
        $filter = Filter::getInstance();
        $filter->setConverter($this->converter);
        $filter->addFilterArray([
            'element' => 'fin-streamer',
            'attributes' => [
                'data-symbol' => $symbol
            ]
        ]);
            
        $value = $this->crawler->getValueAt($filter);
        return 123;//clear$value;
        
    }
    protected function buildUrl(string $symbol) {
        return $this->endpoint . $symbol;
    }
}