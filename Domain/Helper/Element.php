<?php
namespace Scraper\Domain\Helper;

use Scraper\Domain\Base\Converter;
use Scraper\Domain\Base\IFilter;

class Element implements IFilter {
    protected Element $element;
    protected string $tag;
    protected array $attributes;
    protected string $id;
    protected string $class;
    protected Converter $converter;

    public function reset() {

    }
    public function getElement() {
        return $this->element;
    }
    public function hasElement() {
        return isset($this->element);
    }
    public function addTag(string $tag) {
        $this->tag = $tag;
        return $this;
    }
    public function getTag() {
        return $this->tag;
    }
    public function hasTag() {
        return isset($this->tag);
    }
    public function addId(string $id) {
        $this->id = $id;
        return $this;
    }
    public function getId() {
        return $this->id;
    }
    public function hasId() {
        return isset($this->id);
    }
    public function addClass(string $class) {
        $this->class = $class;
        return $this;
    }
    public function getClass() {
        return $this->class;
    }
    public function hasClass() {
        return isset($this->class);
    }
    public function addAttribute($name, $value) {
        $this->attributes[$name] = $value;
        return $this;
    }
    public function hasAttributes() {
        return false;
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
                $this->element = new Element();
                $this->element->setConverter($this->converter);
                $this->element->addFilterArray($value);
            }
            if ($key == 'tag') {
                $this->tag = $value;
            }
            if ($key == 'id') {
                $this->id = $value;
            }
            if ($key == 'class') {
                $this->class = $value;
            }
            if ($key == "attributes") {
                foreach ($value as $k=>$v) {
                    $this->addAttribute($k, $v);
                }
            }
        }
    }
}