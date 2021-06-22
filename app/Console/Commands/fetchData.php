<?php

namespace App\Console\Commands;

use App\Holiday;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class fetchData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will fetch all south african public holidays';

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
        $holiday = new Holiday(['headers' => ['Accept' => 'application/json']]);
        $response = Http::get('https://kayaposoft.com/enrico/json/v2.0/?action=getHolidaysForYear&year=2021&country=zaf&holidayType=public_holiday');
        $holidays = json_decode($response->getBody()->getContents());       
        
       foreach($holidays as $holiday) {
        Holiday::updateOrCreate([
            'name' => $holiday->name[0]->text,
            'date' => $holiday->date->day . '/'. $holiday->date->month . '/' . $holiday->date->year,
        ]);
            }
        echo 'Holidays Successfully Fetched';
    }
}
