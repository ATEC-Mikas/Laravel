@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Criar Post</div>
            <div class="card-body">
                <form action="/posts" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="desc">Descrição</label>
                        <input type="text" name="desc" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">Imagem</label>
                        <input type="file" name="image" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Criar Post" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        
    </div>
@endsection