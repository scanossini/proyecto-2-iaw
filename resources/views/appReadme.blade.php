@extends('base')
    @section('content')
    <div class="container">
        Proyecto 2 - Ingenieria de Aplicaciones Web 2020 - Banco de sangre
        <ul class="mt-2" Tipos de usuario>

    <li>Usuario editor: carga donantes y edita la cantidad de donaciones a su nombre disponibles en el banco.</li>

    <li>Usuario administrador: alcances del editor y además puede cambiar los datos personales del donante. </li>
 
    Entidades

    Donantes: ID (PK), tipo de sangre, cantidad de donaciones disponibles, nombre, edad, sexo, ubicación, foto.

    Tabla de contacto: ID (PK), persona (FK al ID del donante), tipo de contacto (mail/teléfono), valor.

    Relación 1:N de Donante a Tabla de contacto.

</ul>
</div>
    @endsection
