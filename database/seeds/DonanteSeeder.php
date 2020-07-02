<?php

use Illuminate\Database\Seeder;

class DonanteSeeder extends Seeder
{   

    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        App\Donante::create(array(
            'nombre' => 'donante1',
            'edad' => 18,
            'sexo' => 'm',
            'tipoSangre' => 'A+',
            'donacionesDisp' => 2,
            'ubicacion' => 'cipolletti',
            'foto' => null
        ));

        App\Donante::create(array(            
            'nombre' => 'donanteA',
            'edad' => 22,
            'sexo' => 'f',
            'tipoSangre' => 'A-',
            'donacionesDisp' => 0,
            'ubicacion' => 'bahia blanca',
            'foto' => null
        ));
    }
}
