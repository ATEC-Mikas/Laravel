@extends('/layout/header')

@section('title')
    Index
@endsection

@section('content')
    <h1>Cursos</h1>
    @foreach ($cursos as $curso)
    <section>
        <h3>Nome: {{$curso["nome"]}}</h3>
        <a href="/curso/{{$curso['id']}}/inscrever"><p>Inscrever</p></a>
        <p>Tema: {{$curso["tema"]}}</p>
        <p>Desc: {{$curso["desc"]}}</p>
    </section>
    @endforeach
@endsection