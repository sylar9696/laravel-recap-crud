@extends('layouts.layout')

@section('title')
{{ $team->name }}
@endsection

@section('content')


<div class="container text-center">

    {{-- notifica di avvenuto aggiornamento --}}
    @if ( session('message') )
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="card" style="width: 18rem;">
        <img src=" {{ $team->logo }} " class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $team->name }}</h5>
            <p class="card-text">{{ $team->birthDate }}</p>
        </div>
    </div>
</div>
@endsection
