<?php 
namespace Scraper\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Panther\Client;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

use Scraper\Outputs\PrettyConsoleOutput;
// the name of the command is what users type after "php bin/console"
abstract class ScrapCommand extends Command
{

    protected function configure(): void
    {
        $this->addArgument('site', InputArgument::REQUIRED, 'site name');

        $this->addOption('json','',InputOption::VALUE_REQUIRED,'Data in json','');
        
    }
}