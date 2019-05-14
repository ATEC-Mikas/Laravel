@extends('/layout/header')

@section('title')
    Index
@endsection

@section('content')
    <h1>Inscrever Curso {{$curso["nome"]}}</h1>
    <div>
        <form action="/curso/{{intval($curso['id'])-1}}/create" method="post">
            @csrf
            <input type="text" name="nome" placeholder="nome"><br>
            <input type="text" name="morada" placeholder="morada"><br>
            <input type="text" name="codpostal" placeholder="codigo postal"><br>
            <input type="text" name="localidade" placeholder="localidade"><br>
            <input type="text" name="nacionalidade" placeholder="nacionalidade"><br>
            <input type="number" name="telefone" placeholder="telefone"><br>
            <input type="email" name="email" placeholder="email"><br>
            <textarea name="obs" cols="30" rows="10" placeholder="observações"></textarea><br>
            <input type="submit"><br>
            <input type="reset"><br>
        </form>

    </div>
@endsection