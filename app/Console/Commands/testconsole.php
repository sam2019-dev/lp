<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class testconsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'testcom:test1 {arg1} {arg2}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $agg3 = $this->ask('Please Ask a question');
        $this->info($this->argument('arg2')." ".$this->argument('arg1')."/n Your question is".$agg3);
    }
}
