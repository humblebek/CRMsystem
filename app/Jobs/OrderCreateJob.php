<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class OrderCreateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $requestData;
    public function __construct($requestData)
    {
        $this->requestData =$requestData;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
          Order::create([
            'admin_id' => $this->requestData[null],
            'name' => $this->requestData['name'],
            'phone' => $this->requestData['phone'],
            'product' => $this->requestData['product'],
            'price' => $this->requestData['price'],
            'status' => $this->requestData['status']
        ]);
    }
}
