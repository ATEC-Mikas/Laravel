@extends("/layout/_layout")

@section("title")
    {{$contact->name}}
@endsection


@section("content")     


    <section>
        <a href="/contacts/{{$contact->id}}"><h1>
            {{$contact->name}}
        </h1></a>
        <p>
            Email: {{$contact->email}} <br>
            Mensagem: {{$contact->message}}
        </p>
        <a href="/contacts/{{$contact->id}}/edit">Editar</a>
    </section>

@endsection