<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use App\Services\SubscriberService;
use Illuminate\Support\Facades\Log;

class SubscribeJob implements ShouldQueue
{
    use Queueable, Dispatchable;
    protected $subscriber;
    /**
     * Create a new job instance.
     */
    public function __construct($subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * Execute the job.
     */
    public function handle(SubscriberService $service): void
    {
        try{
            $service->store($this->subscriber);
            }
            catch(\Exception $e){
                Log::info($e->getMessage());
            }
    }
}
