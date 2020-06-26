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
            'foto' => 'https://image.shutterstock.com/image-photo/female-worker-road-construction-260nw-724291249.jpg'
        ));

        App\Donante::create(array(
            'nombre' => 'donanteA',
            'edad' => 22,
            'sexo' => 'f',
            'tipoSangre' => 'A-',
            'donacionesDisp' => 0,
            'ubicacion' => 'cipolletti',
            'foto' => 'https://image.shutterstock.com/image-photo/female-worker-road-construction-260nw-724291249.jpg'
        ));
    }
}
