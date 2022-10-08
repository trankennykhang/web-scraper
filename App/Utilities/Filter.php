<?php
namespace Scraper\App\Utilities;

class Filter {
    
    public static function toCSSFilterString(array $selectors) {
        $str = "";
        if (isset($selectors['tag'])) {
            $str = $selectors['tag'];
            if (isset($selectors['attrib'])) {
                $str .= '[' . $selectors['attrib']['name'] . '=' . $selectors['attrib']['value'] . ']';
            }
        }
        return $str;
    }
}