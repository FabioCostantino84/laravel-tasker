@extends('layouts.admin')

@section('main-content')
    

<div class="table-responsive">
    <table class="table table-info">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">STATUS</th>
                <th scope="col">DATE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr class="">
                <td scope="row">{{$task->id}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->status ? 'to do' : 'done'}}</td>
                <td>{{$task->created_at}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>



@endsection