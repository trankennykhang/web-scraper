<?php 
namespace Scraper\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Panther\Client;
use Symfony\Component\Console\Input\InputArgument;

use Scraper\Outputs\PrettyConsoleOutput;
// the name of the command is what users type after "php bin/console"

#[AsCommand(name: 'panther', description: 'Scrap web for data')]
class PantherScrapCommand extends ScrapCommand
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Prepare the data
        // Set the default action
        $action = "get";
        // Get the site to query data
        $site = $input->getArgument("site");
        // Get other data to query the site
        $data = $input->getArgument("data");
        
        // Create the browser client
        $client = Client::createChromeClient();

        // Use the reflection to configure the site
        try {
            //$reflection = new \ReflectionClass($config()['NAMESPACE_SITES'] . $site . "Handler");
            
            //$result = $handler->$action($data);
        } catch (\ReflectionException $e) {

        }
        // How to inject the $output
        $output->write("test");
        return Command::SUCCESS;
    }
}