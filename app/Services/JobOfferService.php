<?php


namespace App\Services;


use App\Models\JobOffer;

class JobOfferService
{
    /**
     * @param string $email
     * @return bool
     */
    public function postedFirstTime($email)
    {
        $emailData = JobOffer::firstWhere('email', $email);

        return !$emailData;
    }
}
