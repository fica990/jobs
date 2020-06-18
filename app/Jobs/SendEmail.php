<?php

namespace App\Jobs;

use App\Models\JobOffer;
use App\Services\JobOfferMailService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;
    protected $jobOffer;

    /**
     * Create a new job instance.
     *
     * @param JobOffer $jobOffer
     */
    public function __construct(JobOffer $jobOffer)
    {
        $this->jobOffer = $jobOffer;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailService = new JobOfferMailService();

        $mailService->sendEmails($this->jobOffer);
    }
}
