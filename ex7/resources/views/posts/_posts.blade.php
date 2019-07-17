@foreach ($posts as $post)
<div class="card post">
<div class="card-body"> <img style="max-height:250px;" class="rounded mx-auto d-block" src="/images/posts/{{$post->image}}" alt="{{$post->desc}}"> </div>
    <div class="card-footer">
    <p><a href="/user/{{$post->user->id}}">{{$post->user->name}}</a> - {{$post->created_at->diffForHumans()}}</p>
    <span>{{$post->desc}}</span></div>
    <p>
        @include("posts._vote")
</div>    
@endforeach