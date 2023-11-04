@extends('layouts.admin')

@section('main-content')

@include('partials.taskCreateForm')
    

<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">STATUS</th>
                <th scope="col">DATE</th>
                <th scope="col">SHOW</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr class="">
                <td scope="row">{{$task->id}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->status ? 'done' : 'to do'}}</td>
                <td>{{$task->created_at}}</td>
                <td>
                    <a class="btn btn-primary btn-sm " href="{{ route('tasks.show', $task) }}" role="button">show</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>



@endsection