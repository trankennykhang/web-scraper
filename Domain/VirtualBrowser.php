<?php 
namespace Scrapper\Domain;

interface VirtualBrowser {
    public function loadPage(string $url);
    public function submitForm();
    public function clickLink();
}
