@extends('layouts.app')

@section('head')
    <style>
        p.text {
            margin:10px;
        }

        div.card-header ol.breadcrumb {
            padding:0;
            margin:0;
            background-color: transparent;
        }
    </style>
@endsection

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/topics">Topic</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$topic->title}}</li>
                        </ol>    
                    </nav>
                </div>

                    <div class="card-body">
                        @if($topic->user_id==Auth::user()->id)
                        <form action="/topics/{{$topic->id}}" method="post" style="display:inline-block;float:right;">
                            @csrf
                            @method('delete')
                            <input class="btn btn-primary btn-sm" type="submit" value="{{ ($topic->open ? 'Fechar' : 'Abrir') }} Tópico" style="float:right;">
                        </form>
                        @endif
                        <h1>{{$topic->title}}</h1>
                        <h4><span class="badge badge-secondary">{{$topic->created_at->format('Y-m-d')}}</span>
                        @if($topic->open)
                            <span class='badge badge-success'>Aberto</span>
                        @else 
                            <span class='badge badge-danger'>Fechado</span>
                        @endif
                        </h4>

                        <p class="text">{{$topic->text}}</p>

                        <h2>Respostas:</h2>

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
                            <div class="card" style="margin:10px 0">
                                <div class="card-body">
                                    <h5 class="card-title">Responder:</h5>
                                    <form action="/topic/{{$topic->id}}/answer" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="answer" class="form-control" id="answer" placeholder="Escreva aqui a resposta...">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Responder</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                        @if(count($topic->answers)==0)
                                <h3 style="margin-top:20px;">{{($topic->open ? "Ainda não existem respostas." : "Não houve respostas." )}}</h3>
                        @else
                            @include("topic._answers")
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection