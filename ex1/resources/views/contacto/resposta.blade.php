@extends('/layout/header')

@section('title')
    Index
@endsection

@section('content')
    <h1>Contacto</h1>

    <div>
        <ul>
            <li>Nome: {{$resposta['nome']}}</li>
            <li>Email: {{$resposta['email']}}</li>
            <li>Mensagem: {{$resposta['mensagem']}}</li>
        </ul>
    </div>
@endsection