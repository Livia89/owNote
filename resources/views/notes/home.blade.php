@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                @if (session('statusNote'))
                        <div class="alert alert-success" role="alert">
                            {{ session('statusNote') }}
                        </div>
                    @endif

                    <a href='{{route("notes.add")}}' class='right btn btn-primary'> <span class='fas fa-plus'></span> Add Note</a> <br>
                    <br>
                    <table class='table'>
                        <thead class='thead-dark'>
                            <tr >
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Notification Date</th>
                            </tr>
                        </thead>
                        @foreach($notas as $nota)
                        <tr>
                            <td scope="col">{{$nota->title}}</td>
                            <td scope="col">{{$nota->content}}</td>
                            <td scope="col">{{\Carbon\Carbon::parse($nota->dateNotification)->format('d/m/Y')}}</td>
                        </tr>
                        @endforeach
                    </table>
                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
