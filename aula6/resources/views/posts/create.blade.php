@extends("layouts.app")


@section("content")
    <div class="card" style="width: 100%;">
    <div class="card-body">
        <h5 class="card-title">
            Criar Post
        </h5>
        <div class="card-body">
            <p class="card-text">
                @include("layouts._errors")
                <form action="/posts" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="content">Conteudo</label>
                        <textarea class="form-control" id="content" name="content" placeholder="Escrever conteudo..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Criar Post</button>
                </form>
            </p>
        </div>
    </div>
    </div>
@endsection