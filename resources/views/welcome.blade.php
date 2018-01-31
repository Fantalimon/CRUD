<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        h1 {padding: 0px;}
        h2 {padding-left: 20px;}

        form{
            display: inline;
        }
        form button{
            background:transparent;
            padding: 0px;
            border:0;
        }

        form button i{
            color: #337ab7;
            padding: 0px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="menu">

            <h1>Добро пожаловать в наш задачник. </h1>

              <h2>Надеюсь он работает и вам понравится</h2>

            </ul>
                <hr>
            <a href="{{route('tasks.index')}}" class="btn btn-success">Начать смотреть задания</a>
        </div>
    </div>
</div>


</body>
</html>
