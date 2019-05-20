@extends("/layout/_layout")

@section("title")
   Contacts
@endsection


@section("content")
    <style>
        div.flex {
            display: flex;
            flex-direction: column;
        }
        div.flex * {
            padding:2px;
            margin:5px;
        }
    </style>    


    <div style="width:45%;display:inline-block">
        <img src="imgs/map.jpg" alt="map" height="300">
    </div>

    <div style="width:45%;display:inline-block;vertical-align: top;">
        <form action="/contacts" method="post">
        <div class="flex">
            @csrf
            <input type="text" name="name" placeholder="Name"/>
            <input type="email" name="email" placeholder="Email"/>
            <textarea name="message" placeholder="Mensagem..." cols="30" rows="10"></textarea>
            <input type="reset" value="Reset">
            <input type="submit" value="Criar">
        </div>
        </form>
    </div>

    @foreach ($contacts as $contact)
    <section>
        <h1>
            <a href="/contacts/{{$contact->id}}">
            {{$contact->name}}
            </a>
        </h1>
    </section>
    @endforeach
@endsection