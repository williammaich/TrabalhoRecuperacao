<?php

use Illuminate\Database\Seeder;

class ShowsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('shows')->insert([
            'nome' => 'Vera LocaIII',
            'genero' => 'Rock',
            'local' => 'Pelotas',
            'artista' => 'Vera Loca',
            'valor' => '20.00',
            'publico' => '2000'
        ]);
        
        DB::table('shows')->insert([
            'nome' => 'Across The Universe',
            'genero' => 'Rock',
            'local' => 'Liverpool',
            'artista' => 'Beattles',
            'valor' => '200.00',
            'publico' => '5000'
        ]);
        
        DB::table('shows')->insert([
            'nome' => 'Desde aquele dia',
            'genero' => 'Rock',
            'local' => 'Porto Alegre',
            'artista' => 'Humberto Gessinger',
            'valor' => '50.00',
            'publico' => '7000'
        ]);
        
    }

}
