@extends('layout')
@section('content')
    <div class="container">
        <h3>My tasks</h3>
        <a href="#" class="btn btn-success">Create</a>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <thead>
                    <tr>
                        <td>id</td>
                        <td>Title</td>
                        <td>actions</td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>fersr id</td>
                        <td>fersr title</td>
                        <td>
                            <a href="#"><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="#"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="#"><i class="glyphicon glyphicon-remove"></i></a>

                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
