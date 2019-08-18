@extends('layouts.master')

@section('title', 'Editar Actor')

@section('encabezado', 'Editar Actor')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar actor {{ $actor->first_name }} {{ $actor->last_name }}</div>
                        <div class="card-body">
                            <form action="{{ route('actors.update', $actor->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $actor->first_name }}">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Apellido</label>
                                        <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $actor->last_name }}">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Rating</label>
                                        <input type="text" name="rating" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $actor->rating }}">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Editar</button>
                            </form>
                        </div>
            </div>
        </div>
    </div>
@endsection
