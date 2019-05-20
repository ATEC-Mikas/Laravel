@extends("/products/_template")

@section("title")
    Produto {{$product->name}}
@endsection

@section("content")
        <section>
            <p>Id: {{$product->id}}</p>
            <p>Name: {{$product->name}}</p>
            <p>Description: {{$product->description}}</p>
        </section>
@endsection