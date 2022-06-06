@extends('layouts.layout')

@section('title')
Crea una squadra
@endsection

@section('content')

{{-- Errors di validazione --}}

@if ( $errors->any() )
    <div class="alert alert-danger">
        <ul>
            @foreach ( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- FORM --}}
<div class="container">
    <form action=" {{route('teams.store')}} " method="POST">
        @csrf
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">

        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="city">

        <label for="birthDate" class="form-label">Anno di fondazione</label>
        <input type="number" class="form-control" id="birthDate" name="birthDate">

        <label for="logo" class="form-label">Logo</label>
        <input type="text" class="form-control" id="logo" name="logo">

        <label for="shirt" class="form-label">shirt</label>
        <input type="text" class="form-control" id="shirt" name="shirt">

        <label for="trainer" class="form-label">trainer</label>
        <input type="text" class="form-control" id="trainer" name="trainer">

        <label for="stadium" class="form-label">stadio</label>
        <input type="text" class="form-control" id="stadium" name="stadium">

        <label for="stadium" class="form-label">Moduli</label>
        <select class="form-select" aria-label="Default select example" name="modules">
            <option>4-4-2</option>
            <option>3-5-2</option>
            <option>4-2-3-1</option>
        </select>

        <button type="submit" class="btn btn-primary mt-5">Invia</button>

    </form>
</div>

@endsection
