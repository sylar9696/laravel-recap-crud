@extends('layouts.layout')

@section('title')
Modifica una squadra
@endsection

@section('content')
{{-- FORM --}}
<div class="container">
    <form action=" {{route('teams.update', $team->id)}} " method="POST">
        @csrf
        @method('PUT')
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value=" {{ $team->name }} ">

        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="city" value=" {{ $team->city }} ">

        <label for="birthDate" class="form-label">Anno di fondazione</label>
        <input type="text" class="form-control" id="birthDate" name="birthDate" value=" {{ $team->birthDate }} ">

        <label for="logo" class="form-label">Logo</label>
        <input type="text" class="form-control" id="logo" name="logo" value=" {{ $team->logo }} ">

        <label for="shirt" class="form-label">shirt</label>
        <input type="text" class="form-control" id="shirt" name="shirt" value=" {{ $team->shirt }} ">

        <label for="trainer" class="form-label">trainer</label>
        <input type="text" class="form-control" id="trainer" name="trainer" value=" {{ $team->trainer }} ">

        <label for="stadium" class="form-label">stadio</label>
        <input type="text" class="form-control" id="stadium" name="stadium" value=" {{ $team->stadium }} ">

        <label for="stadium" class="form-label">Moduli</label>
        <select class="form-select" aria-label="Default select example" name="modules">
            <option @if ( $team->modules === '4-4-2' )
                selected
            @endif>4-4-2</option>
            <option @if ( $team->modules === '3-5-2')
                selected
            @endif>3-5-2</option>
            <option @if ( $team->modules === '4-2-3-1')
                selected
            @endif>4-2-3-1</option>
        </select>

        <button type="submit" class="btn btn-primary mt-5">Invia</button>

    </form>
</div>

@endsection
