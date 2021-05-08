@extends('layouts.layout')

@section('content')


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

@endsection
