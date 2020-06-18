@extends('layouts.main')

@section('title', 'Jobs App | Job Offer')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title text-center">
                            <strong>{{ $responseMessage }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
