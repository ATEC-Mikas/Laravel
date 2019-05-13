@extends('/layout/header')

@section('title')
    Index
@endsection

@section('content')
    <h1>Contacto</h1>
    <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, ipsam nisi? Illo dolorum ipsum veritatis cum, reiciendis perferendis hic, fugiat obcaecati sunt ab est. Neque asperiores aliquid assumenda doloremque consequatur!
    </div>
    <div>
        <form action="/contacto/criar" method="post">
            @csrf
            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
            <input type="text" name="nome" placeholder="nome"><br>
            <input type="email" name="email" placeholder="email"><br>
            <textarea name="mensagem" placeholder="Mensagem"></textarea><br>
            <input type="submit"><br>
            <input type="reset"><br>
        </form>
    </div>
@endsection