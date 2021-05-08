@extends('layouts.layout')
@section('title') {{$post -> title}} @endsection

@section('content')
    <div class="mt-2">
        <div class="card">
            <div class="card-body ">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text"><span class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, autem cum deserunt dolor dolore expedita impedit ipsa necessitatibus nobis numquam odit optio pariatur placeat provident reprehenderit totam veniam veritatis vitae.</span>
                </p>
                <span class="text-muted">{{$post->rubric->title}}</span>
            </div>
        </div>
        <a href="{{route('home')}}">Назад</a>
    </div>
@endsection
@section('footer')
    @parent
@endsection
