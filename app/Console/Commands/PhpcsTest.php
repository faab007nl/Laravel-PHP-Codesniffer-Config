<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class PhpcsTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'phpcs:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the PHP_Codesniffer test command';

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
        echo "Running PHP_CodeSniffer test command...\n";

        $output = shell_exec("./vendor/bin/phpcs");
        if (strlen($output) > 0) {
            echo $output;
        } else {
            echo "No errors found!\n";
        }
        echo "Done!\n";

        return CommandAlias::SUCCESS;
    }
}
