@extends('layouts.admin')

@section('main-content')

<div class="row align-items-md-stretch">
    <div class="col-md-12">
        <div
            class="h-100 p-5 text-white bg-primary border rounded-3">
            <h2>The task</h2>
            <p>{{$task->description}}</p>
            <p>{{$task->created_at}}</p>
        </div>
    </div>
</div>
    
@endsection