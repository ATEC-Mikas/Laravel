<div class="card" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title">
        <a href="/users/{{$post->user->id}}/posts">
            @ {{$post->user->name}} 
        </a>
        <span style="float:right"> {{$post->created_at->diffForHumans()}}</span>
    </h5>
    <p class="card-text"> {{$post->content}} </p>
  </div>
</div>