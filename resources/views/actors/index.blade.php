@extends('layouts.master')

@section('title', 'Actores')

@section('content')
<div class="container">
    <div class="row">
        <ul>
            @foreach ($actors as $actor)
                <li>{{ $actor->first_name }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
