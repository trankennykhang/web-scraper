<?php 
namespace Kupman\Scraper\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Panther\Client;
use Kupman\Scraper\Outputs\PrettyConsoleOutput;
use Symfony\Component\Console\Input\InputArgument;
// the name of the command is what users type after "php bin/console"

#[AsCommand(name: 'panther', description: 'Scrap web for data')]
class PantherScrapCommand extends ScrapCommand
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $client = Client::createChromeClient();

        // How to inject the $output
        $output->write("test");
        return Command::SUCCESS;
    }
}