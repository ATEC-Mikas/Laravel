<?php
$voted = Auth::user()->Voted($post->id);
?>
<div class="vote" id={{$post->id}}>
<form action="/posts/{{$post->id}}/up" method="POST">
    @csrf
<input type="submit" class="btn {{($voted== 1 ? "btn-success" : "btn-light")}}" value="⬆"> 
</form>
<div> <h2><span class="badge badge-primary">{{$post->votes}} </span></h2></div>
<form action="/posts/{{$post->id}}/down" method="POST">
    @csrf
    <input type="submit" class="btn {{($voted== -1 ? "btn-danger" : "btn-light")}}" value="⬇"> 
</form>
</div>
</p>