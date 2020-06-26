<?php

use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Contacto::create(array(
            'donante_id' => 1,
            'tipoContacto' => 'telefono',
            'valorContacto' => '2995329657'
        ));

        App\Contacto::create(array(
            'donante_id' => 1,
            'tipoContacto' => 'mail',
            'valorContacto' => 'donante1@muchasangre.com'
        ));

        App\Contacto::create(array(
            'donante_id' => 2,
            'tipoContacto' => 'mail',
            'valorContacto' => 'donanteA@muchasangre.com'
        ));
    }
}
