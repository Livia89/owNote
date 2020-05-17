@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Wellcome to OwNote</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        @if (Route::has('register'))
                            <a class="btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif
                        @if (Route::has('register'))
                            <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </div>
                </div>

    </div>
@endsection


