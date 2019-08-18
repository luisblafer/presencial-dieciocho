@extends('layouts.master')

@section('title', 'Detalle Actor')

@section('encabezado')
    {{ $actor->first_name }} {{ $actor->last_name }}
@endsection

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card" style="width: 18rem;">
                            {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                            <div class="card-body">
                                <h5 class="card-title">{{ $actor->first_name }} {{ $actor->last_name }}</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nombre: {{ $actor->first_name }}</li>
                                <li class="list-group-item">Apellido: {{ $actor->last_name }}</li>
                                <li class="list-group-item">Rating: {{ $actor->rating }}</li>
                            </ul>
                            <div class="card-body">
                                <a href="{{ route('actors.edit', $actor->id) }}" class="card-link">Editar</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                    </div>
            </div>
        </div>
</div>
@endsection
