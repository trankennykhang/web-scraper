<?php
namespace Scraper\Domain\Sites;

use Scraper\Domain\Base\SiteHandler;
use Scraper\Domain\Base\VirtualCrawler;

class MarketIndexHandler extends SiteHandler {
    
    public string $endpoint = "https://www.marketindex.com.au/asx/";
    
    public function query(string $symbol) {

        $html =  $this->browser->loadPage($this->buildUrl($symbol));
        // use php query or similar to query the data
        print_r($html);
    }
    public function price(string $symbol) {
        $html = $this->browser->loadPage($this->buildUrl($symbol));
        $this->crawler->convertHtml($html);
        $value = $this->crawler->getValueAt([
            [
                'element' => 'span',
                'attributes' => [
                    [
                        'name' => 'data-quoteapi',
                        'value' => 'price'
                    ]
                ]
            ]
        ]);
        return $value;
        
    }
}