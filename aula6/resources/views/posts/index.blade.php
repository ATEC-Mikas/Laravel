@extends("layouts.app")


@section("content")
    @if(!Auth::guest())
        <div class="card" style="width: 100%;">
            <div class="card-body">
            <h5>
                Bem vindo, {{Auth::user()->name}}
                <p class="card-text float-right">
                    <a href="/posts/create" class="btn btn-primary btn-sm">
                        Criar Post
                    </a>
                </p>
            </h5>
            </div>
        </div>
    @endif

    @foreach($posts as $post)
        @include("posts._post")
    @endforeach

    {{$posts->links()}}
@endsection