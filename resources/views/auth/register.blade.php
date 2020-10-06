@extends('layouts.app')

@php
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <register-form
                        ></register-form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
