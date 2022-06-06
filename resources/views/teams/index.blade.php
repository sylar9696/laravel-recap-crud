@extends('layouts.layout')

@section('title')
Squadre
@endsection

@section('content')
 {{-- notifica di avvenuta eliminazione --}}
    @if ( session('message') )
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

<a href="{{ route('teams.create') }}" class="btn btn-success">Crea Squadra</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">logo</th>
            <th scope="col">name</th>
            <th scope="col">city</th>
            <th scope="col">birthDate</th>
            <th scope="col">shirt</th>
            <th scope="col">trainer</th>
            <th scope="col">stadium</th>
            <th scope="col">modules</th>
            <th scope="col">actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($teams as $team )
        <tr>
            <td>
                <img src="{{ $team->logo }}" alt="" width="50px">
            </td>
            <td>{{ $team->name }}</td>
            <td>{{ $team->city }}</td>
            <td>{{ $team->birthDate }}</td>
            <td>
                <img src="{{ $team->shirt }}" alt="" width="50px">
            </td>
            <td>{{ $team->trainer }}</td>
            <td>{{ $team->stadium }}</td>
            <td>{{ $team->modules }}</td>
            <td>
                <a href=" {{route('teams.show', $team->id )}} " class="btn btn-primary">
                    View
                </a>
                <a href=" {{route('teams.edit', $team->id )}} " class="btn btn-primary">
                    Edit
                </a>
                <form action=" {{ route('teams.destroy', $team->id) }} " method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Elimina</button>

                </form>
            </td>
        </tr>
        @empty

        @endforelse


    </tbody>
</table>

@endsection
