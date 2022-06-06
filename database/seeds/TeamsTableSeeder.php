<?php

use Illuminate\Database\Seeder;
//Import models
use App\Models\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = config('teams');

        foreach($teams as $team){
            // Definiamo una nuova istanza
            $new_teams = new Team();
            // Richiamiamo l'istanza per inserire i dati con fill
            $new_teams -> fill($team);
            // Salva i dati
            $new_teams -> save();
        }



    }
}
