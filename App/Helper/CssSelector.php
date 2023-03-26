<?php
namespace Scraper\App\Helper;

use Scraper\Domain\Base\IFilter;
use Scraper\Domain\Base\Converter;

class CssSelector implements Converter{
    public function convert(IFilter $filter): string {
        // Handle filter and convert to css style
        return "#company-header > div > div > div > div";
    }
}