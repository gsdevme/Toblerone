<?php

namespace Toblerone\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Run extends Command
{
    const COMMAND_NAME        = 'toblerone:run';
    const COMMAND_DESCRIPTION = 'Run the test suite';
    const COMMAND_ALIASES     = 'run';

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
}
