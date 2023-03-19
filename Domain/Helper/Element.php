<?php
namespace Scraper\Domain\Helper;

class Element {
    private Element $element;
    private array $attributes;
    private string $id;
    private string $class;

    public static function getInstance() {
        return new Filter();    
    }
    public function reset() {

    }
    public function addElement(Element $element) {
        $this->element = $element;
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
}