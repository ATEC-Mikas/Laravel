@extends('layouts.app')

@section('head')
    <style>
        div.vote {
            display:flex;
        }
        div.vote > * {
            margin:0 10px;
        }
        div.post {
            margin-bottom: 5px;
        }
    </style>
@endsection

@section('content')

    <div class="container" style="margin-bottom:5px;">
        <div class="card" style="margin-bottom:5px;">
            <div class="card-header">A mostrar posts do {{$user->name}}</div>
        </div>

        @include('posts._posts')
         {{$posts->links()}}
    </div>    
@endsection