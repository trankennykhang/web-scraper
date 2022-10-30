<?php
class a {
    public $num = 0;
    public function setValue($v) {
        $this->num = $v;
    }
    public function get() {
        print $this->num;
    }
}
class b {
    public function set(a $test) {
        $test->setValue(5);
    }
}
$test = new a();
$test->get();
$t2 = new b();
$t2->set($test);
$test->get();
die();
require __DIR__.'/vendor/autoload.php'; // Composer's autoloader

use Symfony\Component\Panther\Client;

$client = Client::createChromeClient();


$client->request('GET', 'https://www.marketindex.com.au/asx/cba'); // Yes, this website is 100% written in JavaScript

$client->wait(5);
$crawler = $client->waitForVisibility('#installing-the-framework');

echo $crawler->filter('#installing-the-framework')->text();
$client->takeScreenshot('screen.png'); // Yeah, screenshot!