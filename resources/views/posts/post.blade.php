<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>

<div class="col-sm-6 mt-2">
    <div class="card border-dark">
        <div class="card-body ">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, autem cum deserunt dolor dolore expedita impedit ipsa necessitatibus nobis numquam odit optio pariatur placeat provident reprehenderit totam veniam veritatis vitae.</span>
            </p>
            <div class="card-footer text-muted border-dark">
                {{$post->rubric->title}}
            </div>
        </div>
    </div>
    <a href="{{url('/')}}">Назад</a>
</div>


<script src="/js/app.js"></script>
</body>
</html>
