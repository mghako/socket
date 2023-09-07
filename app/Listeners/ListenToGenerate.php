<?php

namespace App\Listeners;

use App\Events\NoticeToGenerate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class ListenToGenerate implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NoticeToGenerate $event): void
    {
        Cache::set('random', $event->number);
        $randomNumber = Cache::get('random');
        Log::info('number generator listened', [$randomNumber]);
    }
}