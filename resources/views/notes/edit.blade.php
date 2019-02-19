@extends('layouts.app')


@section('content')
<div class="container">
    <h1>Edit your note</h1>
    <form action='{{route("notes.update", $note->id)}}' method='post'>
        <input type='hidden' name='_method' value='put'>
        {{ csrf_field() }}
        @include('notes._form')
    </form>
</div>
@endsection