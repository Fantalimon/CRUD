@extends('layout')
@section('content')
    <div class="container">
        <h3>Show Task  - {{$task->id}}</h3>

        @include('errors')

        <div class="row">
            <div class="col-md-12">
                <h3>{{$task->title}}</h3>
                <p>
                    {{$task->descriptions}};
                </p>
            </div>
        </div>
    </div>
@endsection
