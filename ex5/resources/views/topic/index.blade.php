@extends('layouts.app')

@section('head')
<style>
    a.link-unstyled {
        color:inherit;
        decoration:none;
    }
    a.link-unstyled:hover {
        
    }
</style>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Topic</div>
                    <div class="card-body">
                        <a href="/topics/create">Criar Tópico</a><br>


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