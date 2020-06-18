@extends('layouts.main')

@section('title', 'Jobs App | New Job Offer')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>New Job Offer</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('job-offers.store') }}" method="post">
                                @csrf
                                @include('job-offers.partials._form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
