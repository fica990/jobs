@extends('layouts.main')

@section('title', 'Jobs App | All Job Offers')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">All Contacts</h2>
                                <div class="ml-auto">
                                    <a href="{{ route('job-offers.create') }}" class="btn btn-success"><i
                                            class="fa fa-plus-circle"></i> New job offer</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($sessionMessage = session('message'))
                                    <div class="alert alert-success">{{ $sessionMessage }}</div>
                                @endif
                                @if($jobOffers->count())
                                    @foreach($jobOffers as $index => $jobOffer)
                                        <tr>
                                            <th scope="row">{{$index + $jobOffers->firstItem()}}</th>
                                            <td>{{$jobOffer->title}}</td>
                                            <td>{{$jobOffer->description}}</td>
                                            <td>{{$jobOffer->email}}</td>
                                            <td>{{$jobOffer->status_name}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            {{$jobOffers->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
