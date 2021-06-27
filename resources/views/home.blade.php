@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <button type="button" onclick="window.location='{{ route('donation.index') }}'">Show all donation</button>

                <div class="card-header"></div>
                <button type="button" onclick="window.location='{{ route('donation.create') }}'">Add new donation</button>
            </div>
        </div>
    </div>
</div>
@endsection