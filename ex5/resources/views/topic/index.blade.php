@extends('layouts.app')

@section('head')
<style>
    a.link-unstyled {
        color:inherit;
        decoration:none;
    }

    div.card-header ol.breadcrumb {
        padding:0;
        margin:0;
        background-color: transparent;
    }

    a.btn-create {
        margin-bottom: 10px;
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
                            <li class="breadcrumb-item active" aria-current="page">Topic</li>
                        </ol>
                    </nav>
                </div>
                    <div class="card-body">
                        <a class="btn btn-primary btn-sm btn-create" href="/topics/create">Criar Tópico</a>


                        @if(count($topics)==0)
                            <h1>Não existem tópicos de momento.</h1>
                        @else
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($topics as $topic)
                        <tr>
                        <td><a class="link-unstyled" href="/topics/{{$topic->id}}">{{$topic->title}}</a></td>
                        <td>
                            @if($topic->open)
                                <span class='badge badge-success'>Aberto</span>
                            @else 
                                <span class='badge badge-danger'>Fechado</span>
                            @endif
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection