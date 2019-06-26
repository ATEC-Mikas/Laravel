@extends('layouts.app')

@section('head')
<style>
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
                            <li class="breadcrumb-item active" aria-current="page">Topic</li>
                        </ol>
                    </nav>
                </div>
                    <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form action="/topics" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Escreva aqui o titulo...">
                            </div>
                            <div class="form-group">
                                <label for="text">Texto</label>
                                <textarea name="text" id="text" placeholder="Escreva aqui o texto..." class="form-control"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Criar Tópico</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection