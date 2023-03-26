<?php
namespace Scraper\App\Helper;

use Scraper\Domain\Base\IFilter;
use Scraper\Domain\Base\Converter;

class CssSelector implements Converter{
    public function convert(IFilter $filter): string {
        // Handle filter and convert to css style
        $str = "";
        if ($filter->hasTag()) {
            $str = $filter->getTag();
        }
        if ($filter->hasId()) {
            $str .= '#' . $filter->getId();
        }
        if ($filter->hasAttributes()) {

        }
        if ($filter->hasElement()) {
            $str .= '>'. $filter->getElement()->convert();

        } 
        //return "#company-header > div > div > div > div";
        return $str;
    }
}