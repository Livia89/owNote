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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Notification Date</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        @foreach($notas as $nota)
                        <tr>
                            <td>{{$nota->title}}</td>
                            <td>{{$nota->content}}</td>
                            <td>{{\Carbon\Carbon::parse($nota->dateNotification)->format('d/m/Y')}}</td>
                            <td>
                                <a href='#'><span class="glyphicon glyphicon-envelope"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
