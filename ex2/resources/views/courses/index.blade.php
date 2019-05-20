@extends("/layout/_layout")

@section("title")
   Courses
@endsection


@section("content")
    
    @foreach ($courses as $course)
    <section>
        <a href="/courses/{{$course->id}}"><h1>
            {{$course->name}} - {{$course->start_date}}
        </h1></a>
    </section>
    @endforeach
@endsection