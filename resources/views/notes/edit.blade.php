@extends('layouts.app')


@section('content')
<h1>Edit your note</h1>
<form action='{{route("notes.edit")}}' method='post'>
    <input type='hidden' name='_method' value='put'>
    @include('notes._form')
</form>

@endsection