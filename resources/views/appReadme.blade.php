@extends('base')
    @section('content')
    <div class="container">
        Proyecto 2 - Ingeniería de Aplicaciones Web 2020 - Banco de sangre
        <ul class="mt-2">Tipos de usuario:

            <li>Usuario editor: carga donantes y edita la cantidad de donaciones a su nombre disponibles en el banco.</li>

            <li>
                Usuario administrador: alcances del editor y además puede cambiar los datos personales del donante.<br>
                El usuario administrador puede también gestionar los roles de todos los usuarios y eliminarlos.
            </li>
 
        </ul>
        
        <ul class="mt-2"> Entidades:<br>

            <li>Donantes: ID (PK), tipo de sangre, cantidad de donaciones disponibles, nombre, edad, sexo, ubicación, foto.</li>

            <li>Tabla de contacto: ID (PK), persona (FK al ID del donante), tipo de contacto (mail/teléfono), valor.</li><br>

            Relación 1:N de Donante a Tabla de contacto.

    <hr>

    Para el proyecto se utilizó el framework Bootstrap. <br>
    La lógica de usuarios y permisos fue aprendida a través de <a href="https://www.youtube.com/playlist?list=PLxFwlLOncxFLazmEPiB4N0iYc3Dwst6m4">esta</a> serie de tutoriales del canal de YouTube
    <a href="https://www.youtube.com/channel/UCaQqYZ-ZyYbD0C5DJSGdVIg">Penguin Digital</a> 

    </div>
    @endsection
