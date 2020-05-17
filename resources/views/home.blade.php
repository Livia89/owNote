@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center pinkColor marginTopBottom20">Wellcome to OwNote</h1>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Make login or register to use application</div>
                    <div class="card-body text-center">
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


