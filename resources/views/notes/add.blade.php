
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method='post' action='{{route("notes.save")}}'>
                 {{ csrf_field() }}
                @include('notes._form')
            </form>
        </div>
    </div>
</div>
@endsection
