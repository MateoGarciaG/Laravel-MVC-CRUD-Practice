<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

// Importamos el modelo para usar ELOQUENT
use App\Models\Dog;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // SIN USAR ELOQUENT, usando FACADE
        DB::table("dogs")->truncate();

        DB::table("dogs")->insert([
            "nombre" => "Mike",
            "raza" => "Labrador retriever",
            "isVacunado" => true,
            "fecha_nacimiento" => "2011-06-12",
            "edad" => 11,
            "price" => 150.4,
            "tamanyo" => "big",
            "descripcion" => "Perro curioso",
        ]);
        DB::table("dogs")->insert([
            "nombre" => "Tobi",
            "raza" => "Bulldog",
            "isVacunado" => false,
            "fecha_nacimiento" => "2012-03-17",
            "edad" => 10,
            "price" => 180.2,
            "tamanyo" => "little",
            "descripcion" => "Perro Enojado",
        ]);
        DB::table("dogs")->insert([
            "nombre" => "Camelo",
            "raza" => "Husky",
            "isVacunado" => true,
            "fecha_nacimiento" => "2008-06-12",
            "edad" => 14,
            "price" => 70.5,
            "tamanyo" => "big",
            "descripcion" => "Perro Jugueton",
        ]);

        // USANDO ELOQUENT
        Dog::create([
            "nombre" => "Onix",
            "raza" => "rottweiller",
            "isVacunado" => false,
            "fecha_nacimiento" => "2018-02-18",
            "edad" => 4,
            "price" => 140.5,
            "tamanyo" => "little",
            "descripcion" => "Perro amoroso",
        ]);

        // Usando DogsFactory para crear varios Dogs Random
        // llamamos al model y factory()
        Dog::factory(4)->create();

    }
}
