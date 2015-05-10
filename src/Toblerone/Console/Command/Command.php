<?php

namespace Toblerone\Console\Command;

use Symfony\Component\Console\Command\Command as SymfonyCommand;

abstract class Command extends SymfonyCommand
{
    /**
     * @inheritdoc
     */
    public function __construct()
    {
        $this->setAliases([static::COMMAND_ALIASES]);

        parent::__construct(null);
    }

    /**
     * @inheritdoc
     */
    protected function configure()
    {
        $this->setName(static::COMMAND_NAME)
            ->setDescription(static::COMMAND_DESCRIPTION);
    }
}
