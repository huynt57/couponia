<?php

namespace App\Console\Commands;

use App\Deal\Functions;
use Illuminate\Console\Command;
use App\Deal;

class CrawlJamJa extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:jamja';

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
        Functions::crawlJamjaMP();
        Functions::crawlJamjaMac();
        Deal::deleteIndex();
        Deal::createIndex($shards = null, $replicas = null);
        Deal::addAllToIndex();
        $this->line('Done');
    }
}
