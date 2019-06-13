@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->answered)
                        Obrigado pela sua resposta!
                    @else
                        <a href="quiz">Ainda não respondeu ao questionário!</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
