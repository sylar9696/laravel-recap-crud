<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Import models
use App\Models\Team;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mostra tutte le squadre

        // $teams = config('teams');
        $teams = Team::All();

        // dd($teams);

        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view( 'teams.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //Validation
        $request->validate(
            [
                'name' => 'required|unique',
                'city' => 'required'
            ],
            // [
            //     'city.required' => 'Il campo :attribute è obbligatorio',
            //     'unique' => 'Il valore deve essere unico'
            // ]
        );

        $data = $request->all();

        // Definiamo una nuova istanza
            $new_teams = new Team();
            // Richiamiamo l'istanza per inserire i dati con fill
            $new_teams -> fill($data);
            // Salva i dati
            $new_teams -> save();

        return redirect()->route('teams.show', $new_teams);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view( 'teams.show', compact('team') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view( 'teams.edit', compact('team') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $data = $request->all();
        $team->update($data);

        return redirect()->route('teams.show', $team )->with('message', "è stato modificato con successo: $team->name");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {

        $team->delete();

        return redirect()->route('teams.index')->with('message', "è stato eliminato con successo: $team->name");
    }
}
