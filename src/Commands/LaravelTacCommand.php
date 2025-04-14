<?php

namespace Josuapsianturi\LaravelTac\Commands;

use Illuminate\Console\Command;

class LaravelTacCommand extends Command
{
    public $signature = 'laravel-tac';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
