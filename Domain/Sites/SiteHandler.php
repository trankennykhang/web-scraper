<?php 
namespace Scraper\Domain\Sites;

use Scraper\Domain\VirtualBrowser;

abstract class SiteHandler {

    private VirtualBrowser $browser;

    public function __construct(VirtualBrowser $browser) {
        $this->browser = $browser;
    }
    public function get(string $url) {
        return $this->browser->loadPage($url);
    }
}
