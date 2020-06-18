<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <p>Title: <strong>{{ $jobOffer->title }}</strong></p>
            <p>Description: <strong>{{ $jobOffer->description }}</strong></p>
            <p>Created: <strong>{{ $jobOffer->created_at }}</strong></p>

            <div class="col-md-6"><a
                    href="{{ route('job-offers.manage',['id' => $jobOffer->id, 'status' => 'approve']) }}"
                    title="Approve">Approve</a></div>
            <div class="col-md-6"><a href="{{ route('job-offers.manage',['id' => $jobOffer->id, 'status' => 'spam']) }}"
                                     title="Spam">Spam</a></div>
        </div>
    </div>
</div>
