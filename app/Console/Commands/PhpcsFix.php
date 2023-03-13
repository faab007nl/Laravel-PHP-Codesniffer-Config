<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class PhpcsFix extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'phpcs:fix';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make PHP_CodeSniffer try fix any errors in the codebase';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo "Fixing any errors found in the codebase...\n";

        $output = shell_exec("./vendor/bin/phpcbf --standard=PSR12 ./app");
        if (strlen($output) > 0) {
            echo $output;
        } else {
            echo "No errors found!\n";
        }
        echo "Done!\n";

        return CommandAlias::SUCCESS;
    }
}
