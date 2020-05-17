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

                @if(session('error'))
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
                                <th class="font-weight-normal">Title</th>
                                <th class="font-weight-normal">Description</th>
                                <th class="font-weight-normal">Notification Date</th>
                                <th class="font-weight-normal">Hours</th>
                                <th class="font-weight-normal">Operations</th>
                            </tr>
                        </thead>


                        @if(isset($notas) and $notas->count())
                            @forelse($notas as $nota)
                                <tr>
                                    <td>{{$nota->title}}</td>
                                    <td>{{$nota->content}}</td>
                                    <td>{{\Carbon\Carbon::parse($nota->dateNotification)->format('d/m/Y')}}</td>
                                    <td>{{$nota->hourNotification}}</td>
                                    <td>
                                        <a href='{{route("notes.edit", $nota->id)}}'><span class='fas fa-edit'></span> &nbsp; </a>
                                        <a href='{{route("notes.delete", $nota->id)}}'><span class='fas fa-trash'></span></a>
                                    </td>
                                </tr>
                                @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">
                                    Dont you haven't any notes
                                </td>
                            </tr>
                        @endif
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
