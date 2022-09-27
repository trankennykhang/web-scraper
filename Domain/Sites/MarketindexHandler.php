<?php
namespace Scraper\Domain\Sites;

use Scraper\Domain\Sites\SiteHandler;

class MarketIndexHandler extends SiteHandler {
    
    public string $endpoint = "https://www.marketindex.com.au/asx/";
    
    public function query(string $symbol) {

        $html =  $this->browser->loadPage($this->buildUrl($symbol));
        // use php query or similar to query the data
        print_r($html);
    }
    public function price(string $symbol) {
        $this->browser->loadPage($this->buildUrl($symbol));
       // $this->browser->waitFor();
        
    }
}