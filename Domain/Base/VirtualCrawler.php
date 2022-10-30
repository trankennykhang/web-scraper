<?php 
namespace Scraper\Domain\Base;

use Scraper\Domain\Helper\Filter;

interface VirtualCrawler {
    public function getValueAt(Filter $filter);
    public function convertHtml(string $html);

}