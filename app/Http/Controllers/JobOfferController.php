<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Services\JobOfferService;
use Illuminate\Http\Request;
use App\Http\Requests\JobOfferRequest;
use App\Models\JobOffer;

class JobOfferController extends Controller
{


    /**
     * @var JobOfferService
     */
    protected $jobOfferService;

    /**
     * JobOfferController constructor.
     * @param JobOfferService $jobOfferService
     */
    public function __construct(JobOfferService $jobOfferService)
    {
        $this->jobOfferService = $jobOfferService;
    }

    public function index()
    {
        $jobOffers = JobOffer::orderBy('created_at')->paginate(10);

        foreach ($jobOffers as $jobOffer) {
            $jobOffer->status_name = JobOffer::getStatusName($jobOffer->status);
        }

        return view('job-offers.index', compact(['jobOffers']));
    }

    public function create()
    {
        return view('job-offers.create');
    }

    public function store(JobOfferRequest $request)
    {
        //if posted for the first time
        if ($this->jobOfferService->postedFirstTime($request->input('email'))) {
            //save new job offer
            $newJobOffer = JobOffer::create($request->all());

            //add sending emails to queue
            SendEmail::dispatch($newJobOffer);

            $responseMessage = 'Job offer is waiting for moderation. Emails sent';
        } else {
            //just publish job offer right away
            $request->merge(['status' => JobOffer::STATUS_PUBLISHED]);
            JobOffer::create($request->all());

            $responseMessage = 'Job offer added and published';
        }

        return redirect()->route('job-offers.index')->with('message', $responseMessage);
    }

    public function manage(Request $request)
    {
        $jobOffer = JobOffer::find($request->id);

        if (!$jobOffer) {
            $responseMessage = "Job offer doesn't exist anymore";
            return view('job-offers.manage', compact(['responseMessage']));
        }

        if ($request->status === 'approve') {
            $jobOffer->status = JobOffer::STATUS_PUBLISHED;

            $responseMessage = "Job offer published!";
        } else {
            $jobOffer->status = JobOffer::STATUS_SPAM;

            $responseMessage = "Job offer marked as spam!";
        }

        $jobOffer->save();

        return view('job-offers.manage', compact(['responseMessage']));

    }

}
