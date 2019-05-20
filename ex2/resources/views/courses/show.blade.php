@extends("/layout/_layout")

@section("title")
   {{$course->name}}
@endsection


@section("content")
    <section>
        <a href="/courses/{{$course->id}}"><h1>
            {{$course->name}} - {{$course->start_date}}
        </h1></a>
    </section>
@endsection