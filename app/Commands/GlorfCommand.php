<?php

namespace App\Commands;

use App\Classes\GlorfDataImporter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GlorfCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('glorf')
            ->setDescription('Import videos from Glorf')
        ;
    }

    protected function execute(InputInterface $input,OutputInterface $output)
    {
        $glorf      = new GlorfDataImporter();
        $result     = $glorf->Import();

        $output->writeln($result);
    }
}