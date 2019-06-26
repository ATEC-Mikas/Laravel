@extends('layouts.app')

@section('head')
    <style>
        p.text {
            margin:10px;
        }
    </style>
@endsection

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Topic

                    @if($topic->user_id==Auth::user()->id)
                        <form action="/topics/{{$topic->id}}" method="post" style="display:inline-block;width:100%;border-top:solid 1px #988b8b;padding-top:5px;">
                            @csrf
                            @method('delete')
                            <input class="btn btn-primary btn-sm" type="submit" value="{{ ($topic->open ? 'Fechar' : 'Abrir') }} Tópico" style="float:right;">
                        </form>
                    @endif
                </div>

                    <div class="card-body">
                        <h1>{{$topic->title}}</h1>
                        <h4><span class="badge badge-secondary">{{$topic->created_at->format('Y-m-d')}}</span>
                        @if($topic->open)
                            <span class='badge badge-success'>Aberto</span>
                        @else 
                            <span class='badge badge-danger'>Fechado</span>
                        @endif
                        </h4>

                        <p class="text">{{$topic->text}}</p>
                        @if(!$answered && $topic->open)
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        <form action="/topic/{{$topic->id}}/answer" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="answer">Responder</label>
                                <input type="text" name="answer" class="form-control" id="answer" placeholder="Escreva aqui a resposta...">
                            </div>
                            <button type="submit" class="btn btn-primary">Responder</button>
                        </form>

                        @endif
                        @if(count($topic->answers)==0)
                                <h2 style="margin-top:20px;">{{($topic->open ? "Ainda não existem respostas." : "Não houve respostas." )}}</h2>
                        @else
                            <h2>Respostas:</h2>
                            @foreach($topic->answers as $answer)
                                <h4><span class="badge badge-secondary">{{$answer->created_at->format('Y-m-d')}}</span></h4>
                                <p>{{$answer->answer}}</p>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection