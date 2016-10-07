<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Excel;

use App\Deal\Functions;

class ImportDeal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:deal';

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
        $filesInFolder = \File::allFiles('data/deals');
        foreach($filesInFolder as $path)
        {
            Functions::importDealCSV('data/deals/'.pathinfo($path)['basename']);
        }

                Deal::deleteIndex();
            Deal::createIndex($shards = null, $replicas = null);
        Deal::addAllToIndex();


        $this->line('Done');
    }
}
