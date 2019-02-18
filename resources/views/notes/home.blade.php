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

                @id(session('error'))    
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>   
                @endif
                <div class="float-right">
                    <a href='{{route("notes.add")}}' class='right btn btn-primary'><span class='fas fa-plus'></span> Add Note</a> 
                    <a href='{{route("notes.deleteAll")}}' class='right btn btn-danger'><span class='fas fa-plus'></span> Delete All Notes</a> <br>
                    <br>
                </div>
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
                                <a href='{{route("notes.edit", $nota->id)}}'><span class='fas fa-edit'></span> &nbsp; </a> 
                                <a href='{{route("notes.delete", $nota->id)}}'><span class='fas fa-trash'></span></a>
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
