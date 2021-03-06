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
        @include('posts._userbar')

        @include('posts._posts')
         {{$posts->links()}}
    </div>    
@endsection