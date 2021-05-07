<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="/css/app.css" rel="stylesheet">
</head>
<body>


<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Новости</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Все <span class="sr-only">(current)</span></a>
                </li>

                @foreach ($rubrics as $rubric)
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{$rubric->title}}</a>
                    </li>
                @endforeach


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
            </form>
        </div>
    </nav>

    <div>
        <div class="row">
            @foreach ($posts as $post)
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
                    <a href="posts/{{$post->id}}" class="badge badge-light">Подробнее</a>
                </div>
            @endforeach
        </div>


    </div>
    <hr>
    <form action="" method="get" class="mt-2">
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input class="form-control" id="title" name="title" placeholder="Заголовок">
        </div>
        <div class="form-group">
            <label for="content">Контент статьи</label>
            <textarea class="form-control " id="content" name="content" rows="3"></textarea>
        </div>


        <select class="form-control form-control-sm">
            @foreach ($rubrics as $rubric)
                <option>{{$rubric->title}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary mt-2 ">Отправить</button>
    </form>


</div>

<footer class="text-muted pt-5">
    <div class="container">
        <p class="float-right">
            <a href="#">Вверх</a>
        </p>
        <p>Lorem ipsum dolor sit amet!</p>
        <p>{{now()->year}}</p>
    </div>

</footer>

<script src="/js/app.js"></script>
</body>
</html>
