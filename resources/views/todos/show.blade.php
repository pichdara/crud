@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-5">
        {{$todo->name}}
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{$todo->description}}
                </div>
            </div>
        <a href="/todos/{{$todo->id}}/edit" class="btn btn-md btn-info my-5">Edit</a>
        <a href="/todos/{{$todo->id}}/delete" class="btn btn-md btn-danger my-5 ml-2">Delete</a>
        </div>
    </div>
</div>


@endsection
