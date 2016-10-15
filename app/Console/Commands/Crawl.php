<?php

namespace App\Console\Commands;

use App\Deal\Functions;
use Illuminate\Console\Command;

class Crawl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:post';

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
        //
        $this->line('Started');
        Functions::crawlVnExpress();
        Functions::crawlDantri();
        $this->line('Done');
    }
}
