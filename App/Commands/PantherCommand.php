<?php 
namespace Kupman\Scraper\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
#use Symfony\Component\Console\Output\OutputInterface;
use Kupman\Scraper\Outputs\PrettyConsoleOutput;

// the name of the command is what users type after "php bin/console"
#[AsCommand(name: 'panther', description: 'Scrap web for stock data via Panther')]
class PantherCommand extends Command
{
    protected static $defaultName = 'panther';

    private $userManager;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;

        parent::__construct();
    }

    protected function execute(InputInterface $input, PrettyConsoleOutput $output): int
    {
        // How to inject the $output
        $output->write("test");
        return Command::SUCCESS;
    }
}