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
    protected Converter $converter;
    public function __construct(VirtualBrowser $browser, VirtualCrawler $crawler, Converter $converter) {
        $this->browser = $browser;
        $this->crawler = $crawler;
        $this->converter = $converter;
    }
    abstract protected function buildUrl(string $symbol);
}
