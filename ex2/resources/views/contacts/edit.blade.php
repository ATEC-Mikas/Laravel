@extends("/layout/_layout")

@section("title")
    {{$contact->name}}
@endsection


@section("content")

    <style>
        div.flex * {
            display: flex;
            flex-direction: column;
        }
        div.flex * {
            padding:2px;
            margin:5px;
        }
    </style>  
    
    <section>
        <div class="flex">
            <form action="/contacts/{{$contact->id}}" method="post">
                <input name="_method" type="hidden" value="PUT">
                @csrf
                <input type="text" name="name" placeholder="Name" value="{{$contact->name}}"/>
                <input type="email" name="email" placeholder="Email" value="{{$contact->email}}"/>
                <textarea name="message" placeholder="Mensagem..." cols="30" rows="10">{{$contact->message}}</textarea>
                <input type="submit" value="Atualizar">
            </form>
            <form action="/contacts/{{$contact->id}}"  method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <input type="submit" value="Apagar">
            </form>
        </div>
</section>

@endsection