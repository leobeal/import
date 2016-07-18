<?php

namespace App\Commands;

use App\Classes\FlubDataImporter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FlubCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('flub')
            ->setDescription('Import videos from Flub')
        ;
    }

    protected function execute(InputInterface $input,OutputInterface $output)
    {
        $flub       = new FlubDataImporter();
        $result     = $flub->Import();

        $output->writeln($result);
    }
}