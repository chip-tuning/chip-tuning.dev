<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Instagram\Instagram;

class InstagramFetcher extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instagram:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch data from instagram';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Instagram $instagram)
    {
        parent::__construct();

        $this->instagram = $instagram;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $test = $this->instagram->getMediasByTag('chip_tuning_rs');

        dd($test);
    }
}
