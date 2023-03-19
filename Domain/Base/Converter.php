<?php 
namespace Scraper\Domain\Base;

interface Converter {
    public function convert(IFilter $filter) : string;
}
