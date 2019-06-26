<div class="card">
    <div class="card-body">
        @foreach($topic->answers->sortByDesc('created_at') as $answer)
            <h6 class="card-title"><span class="badge badge-secondary">Respondido ás {{$answer->created_at->format('Y-m-d G:i:s')}}</span></h6>
            <p class="card-text">{{$answer->answer}}</p>
        @endforeach
    </div>
</div>