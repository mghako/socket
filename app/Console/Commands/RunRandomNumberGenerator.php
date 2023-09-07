<?php

namespace App\Console\Commands;

use App\Events\NoticeToGenerate;
use Illuminate\Console\Command;

class RunRandomNumberGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:run-random-number-generator';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $live_first = rand(1, 9);
        $live_second = rand(1, 9);
        $firstTwoNumSet = 18;
        $generateTwoNum = rand(10, 90);
        $decimal = rand(10, 90);
        $setNum = $firstTwoNumSet.$generateTwoNum.$live_first.'.'.$decimal;
        $firstTwoNum = 16;
        $generateTwoNum = rand(10, 90);
        $generateOneNum = rand(0, 9);
        $generateOneDecNum = rand(0, 9);
        $valueNum = $firstTwoNum.$generateTwoNum.$generateOneNum.'.'.$generateOneDecNum.$live_second;
        $set = null;
        $value = null;
        if ($live_first) {
            $set = number_format($setNum, 2);
        }
        if ($live_second) {
            $value = number_format($valueNum, 2);
        }
        $itemData = [
            'live_first' => $live_first,
            'live_second' => $live_second,
            'live_set' => $set,
            'live_value' => $value,
        ];
        NoticeToGenerate::dispatch($itemData);
    }
}
