<?php

namespace api\ApiPackage\Commands;

use Illuminate\Console\Command;

class ApiPackageCommand extends Command
{
    public $signature = 'api-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
