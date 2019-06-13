@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Topic</div>
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