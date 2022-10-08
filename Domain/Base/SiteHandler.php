<?php 
namespace Scraper\Domain\Base;

use Scraper\Domain\Base\VirtualBrowser;
use Scraper\Domain\Base\VirtualCrawler;

/*********************************************
 * Base class to implement webpage and get data
 * New site need to extend this class
 * Get the function to get data via
 *  - virtual browser
 *  - virtual dom for extract data
 */
abstract class SiteHandler {

    public string $endpoint = "";

    protected VirtualBrowser $browser;
    protected VirtualCrawler $crawler;
    public function __construct(VirtualBrowser $browser, VirtualCrawler $crawler) {
        $this->browser = $browser;
        $this->crawler = $crawler;
    }
    protected function buildUrl(string $target) {
        return $this->endpoint . $target;
    }
}
