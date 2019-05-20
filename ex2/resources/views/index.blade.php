@extends("/layout/_layout")

@section("title")
    Índice    
@endsection


@section("content")
    <img src="imgs/hmm.jpg" alt="hmm?" height="300"><br>
    <a href="/news/{{$news->id}}"><h1>
        {{$news->title}} - {{$news->date}}
    </h1></a>
    <p>
        {{$news->body}}
    </p>
@endsection