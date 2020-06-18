<?php

namespace App\Mail;

use App\Models\JobOffer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobOfferManage extends Mailable
{
    use Queueable, SerializesModels;

    public $jobOffer;

    /**
     * Create a new message instance.
     *
     * @param JobOffer $jobOffer
     */
    public function __construct(JobOffer $jobOffer)
    {
        $this->jobOffer = $jobOffer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('A new job offer is submitted')
            ->view('emails.manage');
    }
}
