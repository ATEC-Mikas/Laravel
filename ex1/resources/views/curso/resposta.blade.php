@extends('/layout/header')

@section('title')
    Index
@endsection

@section('content')
    <h1>Inscrito com Sucesso!</h1>
    <section>
    @foreach ($resposta as $key => $value)
        <p>{{$key}} : {{$value}}</p>
    @endforeach
    </section>

@endsection