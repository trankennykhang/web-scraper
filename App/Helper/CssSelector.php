<?php
namespace Scraper\App\Helper;

use Scraper\Domain\Helper\Filter;

class CssSelector {
    public static function convert(Filter $filter) {
        // Handle filter and convert to css style
        return "div >";
    }
}