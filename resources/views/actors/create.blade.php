@extends('layouts.master')

@section('title', 'Crear Actor')

@section('encabezado', 'Crear Actor')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear actor</div>
                        <div class="card-body">
                            <form action="{{ route('actors.store') }}" method="POST">
                                @csrf
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('first_name') }}">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Apellido</label>
                                        <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Rating</label>
                                        <input type="text" name="rating" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
            </div>
        </div>
    </div>
@endsection

