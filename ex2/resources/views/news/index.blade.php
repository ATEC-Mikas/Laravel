@extends("/layout/_layout")

@section("title")
   News
@endsection


@section("content")
    
    @foreach ($news as $news)
    <section>
        <a href="/news/{{$news->id}}"><h1>
            {{$news->title}} - {{$news->date}}
        </h1></a>
    </section>
    @endforeach
@endsection