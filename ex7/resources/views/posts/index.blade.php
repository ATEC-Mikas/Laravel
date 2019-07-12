@extends('layouts.app')

@section('head')
    <style>
        div#vote {
            display:flex;
        }
        div#vote > * {
            margin:0 10px;
        }
    </style>
@endsection

@section('content')

    <div class="container" style="margin-bottom:5px;">
        @include('posts._userbar')

        @foreach ($posts as $post)
            <div class="card">
            <div class="card-body"> <img style="max-height:250px;" class="rounded mx-auto d-block" src="/images/posts/{{$post->image}}" alt="{{$post->desc}}"> </div>
                <div class="card-footer">
                <p>{{$post->user->name}} - {{$post->created_at->diffForHumans()}}</p>
                <span>{{$post->desc}}</span></div>
                <p>

                <?php
                    $voted = Auth::user()->Voted($post->id);
                ?>
                    <div id="vote">
                    <form action="/posts/{{$post->id}}/up" method="POST">
                        @csrf
                    <input type="submit" class="btn {{($voted== 1 ? "btn-success" : "btn-light")}}" value="⬆"> 
                    </form>
                <div> <h2><span class="badge badge-primary">{{$post->votes}} </span></h2></div>
                    <form action="/posts/{{$post->id}}/down" method="POST">
                        @csrf
                        <input type="submit" class="btn {{($voted== -1 ? "btn-danger" : "btn-light")}}" value="⬇"> 
                    </form>
                    </div>
                </p>
            </div>    
        @endforeach
    </div>    
@endsection