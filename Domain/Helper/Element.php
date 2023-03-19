<?php
namespace Scraper\Domain\Helper;

use Scraper\Domain\Base\Converter;
use Scraper\Domain\Base\IFilter;

class Element implements IFilter {
    protected Element $element;
    private string $tag;
    private array $attributes;
    private string $id;
    private string $class;
    private Converter $converter;

    public function reset() {

    }
    public function addElement(Element $element) {
        $this->element = $element;
        return $this;
    }
    public function addTag(string $tag) {
        $this->tag = $tag;
        return $this;
    }
    public function addId(string $id) {
        $this->id = $id;
        return $this;
    }
    public function addClass(string $class) {
        $this->class = $class;
        return $this;
    }
    public function addAttribute($name, $value) {
        $this->attributes[$name] = $value;
        return $this;
    }
    public function setConverter(Converter $con) {
        $this->converter = $con;
    }

    public function convert() {
        return $this->converter->convert($this);
    }
    public function addFilterArray(array $arr) {
        foreach ($arr as $key => $value) {
            if ($key == "element") {
                if (!is_array($value)) {
                    // add standard element
                    $this->element = new Element();
                    $this->element->addTag($value);
                } else {
                    $this->element->addFilterArray($value);
                }
            }
            if ($key == "attributes") {
                foreach ($value as $k=>$v) {
                    $this->element->addAttribute($k, $v);
                }
            }
        }
    }
}