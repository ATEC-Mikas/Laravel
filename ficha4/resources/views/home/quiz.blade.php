@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="quiz" method="POST" style="display:flex;flex-direction:column;">
                        @csrf
                        <label for="city">Cidade</label>
                        <select name="city">
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                        </select>
                        <label for="transportation">Transporte utilizado</label>
                        <input type="text" name="transportation">
                        <label for="travelavg">Tempo demorado em media</label>
                        <input type="number" name="travelavg">
                        <label for="citypref">Cidade preferida</label>
                        <select name="citypref">
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                        </select>
                        <input type="submit" value="Enviar Resposta" style="margin-top:5px;"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
