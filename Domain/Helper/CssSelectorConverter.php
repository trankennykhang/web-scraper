<?php
namespace Scraper\Domain\Helper;

use Scraper\Domain\Base\Converter;
use Scraper\Domain\Base\IFilter;

class CssSelectorConverter implements Converter {
    public function convert(IFilter $filter) : string {
        // convert to css style string
        $str = 'div > p';

        return $str;
    }
}

?>