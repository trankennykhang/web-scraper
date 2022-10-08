<?php 
namespace Scraper\Domain\Base;

interface VirtualBrowser {
    public function loadPage(string $url);
    public function submitForm();
    public function clickLink();
}
