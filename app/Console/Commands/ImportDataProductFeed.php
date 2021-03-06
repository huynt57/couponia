<?php

namespace App\Console\Commands;

use App\Deal\Functions;
use Illuminate\Console\Command;


class ImportDataProductFeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:data';

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
        $filesInFolder = \File::allFiles('data/products');
        foreach($filesInFolder as $path) {
            Functions::importDataFeedProductCSV('data/products/'.pathinfo($path)['basename']);
        }
        $this->line('Done');
    }
}
