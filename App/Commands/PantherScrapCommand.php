<?php 
namespace Scraper\App\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

use Scraper\Outputs\PrettyConsoleOutput;
use Scraper\App\Infrastructure\PantherCrawler;
use Scraper\App\Infrastructure\PantherBrowser;
use Scraper\App\Helper\CssSelector;

// the name of the command is what users type after "php bin/console"

#[AsCommand(name: 'panther', description: 'Scrap web for data')]
class PantherScrapCommand extends ScrapCommand
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Prepare the data
        // Set the default action
        $action = "query";
        // Get the site to query data
        $site = $input->getArgument("site");
        // Get other data to query the site
        // mix data type
        $json = json_decode($input->getOption("json"));
        if (isset($json->action)) {
            $action = $json->action;
        }
        $symbol = $json->symbol;
        
        // Use the reflection to configure the site
        try {
            $class = config()['NAMESPACE_SITES'] . ucfirst($site) . "Handler";
            $siteClass = new $class(PantherBrowser::createChromePantherBrowser(), new PantherCrawler(), new CssSelector());
            
            $result = $siteClass->$action($symbol);
            $output->writeln($result);
        } catch (\ReflectionException $e) {

        }
        // How to inject the $output
        $output->write("test");
        return Command::SUCCESS;
    }
}