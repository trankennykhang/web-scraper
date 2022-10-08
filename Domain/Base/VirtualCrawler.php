<?php 
namespace Scraper\Domain\Base;

interface VirtualCrawler {
    public function getValueAt(array $selectors);
    public function convertHtml(string $html);

}