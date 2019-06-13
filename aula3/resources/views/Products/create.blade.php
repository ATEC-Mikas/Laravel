@extends('master')

@section('content')
    <h2>Novo produto</h2>
    <form action="/products" method="post">
        @csrf
        Nome: 
        <input type="text" name="name"><br>
        Preço: 
        <input type="text" name="price"><br>    
        Descrição: 
        <textarea name="description">

        </textarea><br>
        <input type="submit" value="Guardar">   
    </form>
@endsection