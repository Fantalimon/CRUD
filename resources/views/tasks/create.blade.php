@extends('layout')
@section('content')
    <div class="container">
        <h3>Create task</h3>

        {{--{{dd(errors)}};--}}

        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route'=>['tasks.store']]) !!}

                <div class="form-group">
                    <input type="text" name="title" class="form-control">
                    <br>
                    <textarea name="descriptions" cols="30" rows="10" id="" class="form-control" widt=""></textarea>
                    <br>
                    <button class="btn btn-success">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
