<?php
namespace Kupman\Scraper\Sites;

use Kupman\Scraper\Domain\SiteHandler;

class MarketIndexHandler extends SiteHandler {
    
    public const URL = "";
    public function query(string $symbol) {
        $data = $this->get($symbol);
        // use php query or similar to query the data
        print_r($data);
    }

}