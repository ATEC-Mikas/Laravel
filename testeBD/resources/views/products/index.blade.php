@extends("/products/_template")

@section("title")
    Produtos
@endsection

@section("content")
    @foreach ($products as $product)
        <section>
            <h1><a href="/products/{{$product->id}}">Name: {{$product->name}}</a></h1>
            <p>Id: {{$product->id}}</p>
            <p>Description: {{$product->description}}</p>
        </section>
    @endforeach
@endsection
