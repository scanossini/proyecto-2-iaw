Proyecto 2 - Ingenieria de Aplicaciones Web 2020 - Banco de sangre

Tipos de usuario

Usuario editor: carga donantes y edita la cantidad de donaciones a su nombre disponibles en el banco.

Usuario administrador: alcances del editor y además puede cambiar los datos personales del donante.
 
Entidades

Donantes: ID (PK), tipo de sangre, cantidad de donaciones disponibles, nombre, edad, sexo, ubicación.

Tabla de contacto: ID (PK), persona (FK al ID del donante), tipo de contacto (mail/teléfono), valor.

Relación 1:N de Donante a Tabla de contacto.
