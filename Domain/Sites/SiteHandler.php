<?php 
namespace Scraper\Domain\Sites;

use Scraper\Domain\VirtualBrowser;

abstract class SiteHandler {

    public string $endpoint = "";

    protected VirtualBrowser $browser;

    public function __construct(VirtualBrowser $browser) {
        $this->browser = $browser;
    }
    protected function buildUrl(string $target) {
        return $this->endpoint . $target;
    }
}
