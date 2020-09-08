@php
    $options = [
        1,2,3
    ];
@endphp
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <multiselect></multiselect>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
