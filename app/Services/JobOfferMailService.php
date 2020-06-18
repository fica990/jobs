<?php


namespace App\Services;


use App\Mail\JobOfferManage;
use App\Mail\JobOfferPosted;
use App\Models\JobOffer;
use Illuminate\Support\Facades\Mail;

class JobOfferMailService
{
    const MODERATOR_EMAIL = 'filipmitrovic90@gmail.com';

    /**
     * @param JobOffer $jobOffer
     */
    public function sendEmails(JobOffer $jobOffer)
    {
        $this->sendPosted($jobOffer->email);
        $this->sendManage($jobOffer);
    }


    /**
     * @param string $recipient
     */
    protected function sendPosted($recipient)
    {
        Mail::to($recipient)
            ->queue(new JobOfferPosted());
    }

    /**
     * @param JobOffer $jobOffer
     */
    protected function sendManage(JobOffer $jobOffer)
    {
        //moderator email
        $toEmail = self::MODERATOR_EMAIL;

        Mail::to($toEmail)
            ->queue(new JobOfferManage($jobOffer));
    }
}
