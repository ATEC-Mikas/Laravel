@extends('master')

@section('content')
    <p><a href="/products/create">Novo</a></p>
    <h2>Lista</h2>

    @foreach ($products as $product)
        <p>
            {{ $product->name }} - {{ $product ->price }}
        </p>
    @endforeach
@endsection