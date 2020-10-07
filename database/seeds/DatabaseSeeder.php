<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Poblando Usuario
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
        ]);

        // Poblando Pais
        DB::table('pais')->insert([
            'nombre' => 'Bolivia',
        ]);

        // Poblando Pais
        DB::table('departamento')->insert([
            'nombre' => 'Pando',
            'pais_id' => 1
        ]);

        DB::table('departamento')->insert([
            'nombre' => 'Beni',
            'pais_id' => 1
        ]);

        DB::table('departamento')->insert([
            'nombre' => 'Santa Cruz',
            'pais_id' => 1
        ]);

        DB::table('departamento')->insert([
            'nombre' => 'Cochabamba',
            'pais_id' => 1
        ]);

        DB::table('departamento')->insert([
            'nombre' => 'Chuquisaca',
            'pais_id' => 1
        ]);

        DB::table('departamento')->insert([
            'nombre' => 'Tarija',
            'pais_id' => 1
        ]);

        DB::table('departamento')->insert([
            'nombre' => 'La Paz',
            'pais_id' => 1
        ]);

        DB::table('departamento')->insert([
            'nombre' => 'Oruro',
            'pais_id' => 1
        ]);

        DB::table('departamento')->insert([
            'nombre' => 'Potosi',
            'pais_id' => 1
        ]);

        // Poblando Provincias

        DB::table('provincia')->insert([
            'nombre' => 'Andres Ibañez',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'Angel Sandoval',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'Chiquitos',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'Cordillera',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'Florida',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'German Busch',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'Guarayos',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'Ichilo',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'Ignacio Warnes',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'Jose Miguel de Velasco',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'Manuel Maria Caballero',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'Ñuflo de Chavez',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'Obispo Santiesteban',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'Sara',
            'departamento_id' => 3
        ]);

        DB::table('provincia')->insert([
            'nombre' => 'Vallegrande',
            'departamento_id' => 3
        ]);

        //16
        DB::table('provincia')->insert([
            'nombre' => 'Aviles',
            'departamento_id' => 6
        ]);
        //17
        DB::table('provincia')->insert([
            'nombre' => 'Sur Carangas',
            'departamento_id' => 8
        ]);
        //18
        DB::table('provincia')->insert([
            'nombre' => 'Tapacari',
            'departamento_id' => 4
        ]);
        //19
        DB::table('provincia')->insert([
            'nombre' => 'Yacuma',
            'departamento_id' => 2
        ]);
        // Poblando Localidades

        DB::table('localidad')->insert([
            'nombre' => 'Santa Cruz de la Sierra',
            'circunscripcion' => 45,
            'provincia_id' => 1
        ]);

        DB::table('localidad')->insert([
            'nombre' => 'Cotoca',
            'circunscripcion' => 46,
            'provincia_id' => 1
        ]);

        DB::table('localidad')->insert([
            'nombre' => 'Porongo',
            'circunscripcion' => 47,
            'provincia_id' => 1
        ]);

        DB::table('localidad')->insert([
            'nombre' => 'La Guardia',
            'circunscripcion' => 48,
            'provincia_id' => 1
        ]);

        DB::table('localidad')->insert([
            'nombre' => 'El Torno',
            'circunscripcion' => 49,
            'provincia_id' => 1
        ]);

        DB::table('localidad')->insert([
            'nombre' => 'El Carmen',
            'circunscripcion' => 50,
            'provincia_id' => 1
        ]);

        DB::table('localidad')->insert([
            'nombre' => 'Puerto Pailas',
            'circunscripcion' => 51,
            'provincia_id' => 1
        ]);

        //8
        DB::table('localidad')->insert([
            'nombre' => 'Yunchara',
            'circunscripcion' => 42,
            'provincia_id' => 16
        ]);
        //9
        DB::table('localidad')->insert([
            'nombre' => 'Real Machacamarca',
            'circunscripcion' => 32,
            'provincia_id' => 17
        ]);
        //10
        DB::table('localidad')->insert([
            'nombre' => 'Tunas Vinto',
            'circunscripcion' => 27,
            'provincia_id' => 18
        ]);
        //11
        DB::table('localidad')->insert([
            'nombre' => 'Santa Rosa Rio Tapado',
            'circunscripcion' => 6,
            'provincia_id' => 19
        ]);



        // Poblando Recintos

        DB::table('recinto')->insert([
            'nombre' => 'Col. Hnos Cavanis',
            'direccion' => 'Radial 17 1/2 entre 5to y 6to anillo.',
            'localidad_id' => 1
        ]);

        DB::table('recinto')->insert([
            'nombre' => 'Col. Henry Prince',
            'direccion' => 'Doble via la guardia 4to anillo.',
            'localidad_id' => 1
        ]);

        DB::table('recinto')->insert([
            'nombre' => 'Col. Aleman',
            'direccion' => 'Av. San Martín entre 2do y 3er anillo.',
            'localidad_id' => 1
        ]);

        DB::table('recinto')->insert([
            'nombre' => 'Col. Japones',
            'direccion' => 'Av. German Busch entre 2do y 3er anillo.',
            'localidad_id' => 1
        ]);

        DB::table('recinto')->insert([
            'nombre' => 'Col. Frances',
            'direccion' => '4to anillo y Roca y Conornado',
            'localidad_id' => 1
        ]);

        DB::table('recinto')->insert([
            'nombre' => 'Col. Caritas',
            'direccion' => 'Av. Santos Dummont 5to anillo.',
            'localidad_id' => 1
        ]);

        DB::table('recinto')->insert([
            'nombre' => 'Col. San George',
            'direccion' => 'Av. Alemana y 4to anillo.',
            'localidad_id' => 1
        ]);

        ////8
        DB::table('recinto')->insert([
            'nombre' => 'U.E. Yuticancha',
            'direccion' => 'Calle 34',
            'localidad_id' => 8
        ]);
        //9
        DB::table('recinto')->insert([
            'nombre' => 'U.E. Bolivia',
            'direccion' => 'Calle 22',
            'localidad_id' => 9
        ]);
        //10
        DB::table('recinto')->insert([
            'nombre' => 'U.E. Tunas Vinto',
            'direccion' => 'Calle 6',
            'localidad_id' => 10
        ]);
        //11
        DB::table('recinto')->insert([
            'nombre' => 'Esc. Santa Rosa',
            'direccion' => 'Calle 4',
            'localidad_id' => 11
        ]);


        //Poblando Mesas
        for ($j = 1; $j <= 7; $j++) {
            for ($i = 1; $i <= 5; $i++) {
                DB::table('mesa')->insert([
                    'codigo_mesa' => $i.$i.$i.$i.$i,
                    'nombre' => '0' . $i,
                    'inscritos' => rand(100,200),
                    'recinto_id' => $j
                ]);
            }
        }

        DB::table('mesa')->insert([
          'codigo_mesa' => 61595,
          'nombre' => '01',
          'inscritos' => 105,
          'recinto_id' => 8
        ]);
        DB::table('mesa')->insert([
          'codigo_mesa' => 41574,
          'nombre' => '01',
          'inscritos' => 210,
          'recinto_id' => 9
        ]);
        DB::table('mesa')->insert([
          'codigo_mesa' => 35186,
          'nombre' => '03',
          'inscritos' => 160,
          'recinto_id' => 10
        ]);
        DB::table('mesa')->insert([
          'codigo_mesa' => 81083,
          'nombre' => '01',
          'inscritos' => 5,
          'recinto_id' => 11
        ]);


        //Poblando Participantes
        DB::table('participante')->insert([
            'nombre' => 'COMUNIDAD CIUDADANA',
            'sigla' => 'CC',
            'color' => '#ff8000',
        ]);
        DB::table('participante')->insert([
            'nombre' => 'FRENTE PARA LA VICTORIA',
            'sigla' => 'FPV',
            'color' => '#004040',
        ]);
        DB::table('participante')->insert([
            'nombre' => 'MOVIMIENTO TERCER SISTEMA',
            'sigla' => 'MTS',
            'color' => '#006f37',
        ]);
        DB::table('participante')->insert([
            'nombre' => 'UNIDAD CÍVICA SOLIDARIDAD',
            'sigla' => 'UCS',
            'color' => '#039efc',
        ]);
        DB::table('participante')->insert([
            'nombre' => 'MOVIMIENTO AL SOCIALISMO - INSTRUMENTO POLÍTICO POR LA SOBERANÍA DE LOS PUEBLOS',
            'sigla' => 'MAS-IPSP',
            'color' => '#003887',
        ]);
        DB::table('participante')->insert([
            'nombre' => 'BOLIVIA DICE NO',
            'sigla' => '21F',
            'color' => '#a40000',
        ]);
        DB::table('participante')->insert([
            'nombre' => 'PARTIDO DEMÓCRATA CRISTIANO',
            'sigla' => 'PDC',
            'color' => '#326363',
        ]);
        DB::table('participante')->insert([
            'nombre' => 'MOVIMIENTO NACIONALISTA REVOLUCIONARIO',
            'sigla' => 'MNR',
            'color' => '#ff80c0',
        ]);
        DB::table('participante')->insert([
            'nombre' => 'PARTIDO DE ACCIÓN NACIONAL BOLIVIANO',
            'sigla' => 'PAN-BOL',
            'color' => '#ff2828',
        ]);
        DB::table('participante')->insert([
            'nombre' => 'BLANCO',
            'sigla' => 'BLANCO',
            'color' => '#ffffff',
        ]);

        DB::table('participante')->insert([
            'nombre' => 'NULO',
            'sigla' => 'NULO',
            'color' => '#b0aeae',
        ]);



        //Poblando Elecciones

        DB::table('eleccion')->insert([
            'nombre' => 'Elecciones Presidenciales 2019',
            'fecha' => '2019-10-08',
            'estado' => 'En Proceso',
            'mesas' => '35',
            'tipo' => 'Presidencial',
        ]);

        DB::table('eleccion')->insert([
            'nombre' => 'Elecciones Presidenciales 2020',
            'fecha' => '2020-01-08',
            'estado' => 'En Espera',
            'mesas' => '35',
            'tipo' => 'Presidencial',
        ]);

        // Poblando Participante_Eleccion
        for ($j = 1; $j <= 2; $j++) {
            for ($i = 1; $i <= 11; $i++) {
                DB::table('participante_eleccion')->insert([
                    'participante_id' => $i,
                    'eleccion_id' => $j,
                ]);
            }
        }


        // Poblando Resultados

        for ($i = 1; $i <= 35; $i++) {
            DB::table('resultado')->insert([
                'total' => rand(0,10),
                'total_diputados' => rand(0,10),
                'mesa_id' => $i,
                'participante_eleccion_id' => 1,
            ]);

            DB::table('resultado')->insert([
                'total' => rand(0,10),
                'total_diputados' => rand(0,10),
                'mesa_id' => $i,
                'participante_eleccion_id' => 2,
            ]);

            DB::table('resultado')->insert([
                'total' => rand(0,20),
                'total_diputados' => rand(0,10),
                'mesa_id' => $i,
                'participante_eleccion_id' => 3,
            ]);

            DB::table('resultado')->insert([
                'total' => rand(0,20),
                'total_diputados' => rand(0,10),
                'mesa_id' => $i,
                'participante_eleccion_id' => 4,
            ]);

            DB::table('resultado')->insert([
                'total' => rand(0,20),
                'total_diputados' => rand(0,10),
                'mesa_id' => $i,
                'participante_eleccion_id' => 5,
            ]);

            DB::table('resultado')->insert([
                'total' => rand(0,10),
                'total_diputados' => rand(0,10),
                'mesa_id' => $i,
                'participante_eleccion_id' => 6,
            ]);

            DB::table('resultado')->insert([
                'total' => rand(0,20),
                'total_diputados' => rand(0,10),
                'mesa_id' => $i,
                'participante_eleccion_id' => 7,
            ]);

            DB::table('resultado')->insert([
                'total' => rand(0,20),
                'total_diputados' => rand(0,10),
                'mesa_id' => $i,
                'participante_eleccion_id' => 8,
            ]);

            DB::table('resultado')->insert([
                'total' => rand(0,20),
                'total_diputados' => rand(0,10),
                'mesa_id' => $i,
                'participante_eleccion_id' => 9,
            ]);

            DB::table('resultado')->insert([
                'total' => rand(0,20),
                'total_diputados' => rand(0,10),
                'mesa_id' => $i,
                'participante_eleccion_id' => 10,
            ]);

            DB::table('resultado')->insert([
                'total' => rand(0,20),
                'total_diputados' => rand(0,10),
                'mesa_id' => $i,
                'participante_eleccion_id' => 11,
            ]);
        }

    }
}
