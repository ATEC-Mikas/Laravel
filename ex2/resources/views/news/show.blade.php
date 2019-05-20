@extends("/layout/_layout")

@section("title")
   {{$news->title}}
@endsection


@section("content")
    <section>
        <a href="/news/{{$news->id}}"><h1>
            {{$news->title}} - {{$news->date}}
        </h1></a>
        <p>
            {{$news->body}}
        </p><br>
    </section>
@endsection