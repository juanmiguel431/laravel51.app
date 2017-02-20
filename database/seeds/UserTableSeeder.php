<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate(); //Trunca la tabla y evita que se dupliquen los usuairos.

        //Inserta en la tabla de usuario
//        DB::table('users')->insert([
//            'name' => 'Duilio'
//        ]);

        //A traves de Eloquent
//        \App\User::create(['name' => 'Duilio']);

        //Esta vez solo le paso un argumento por lo que laravel entiendo que es un solo usuairo que se desea crear. Tambien, al metodo
        //Create se le envía datos personalizados que reemplazaran a los definidos en el model factory.
        factory(\App\User::class)->create([
            'name' => 'Duilo',
            'email' => 'admin@styde.net',
            'role' => 'admin',
            'password' => 'admin'
        ]);

        //A traves del model factory de Laravel.
        factory(\App\User::class, 49)->create(); //Me crea 49 usuarios aleatorios
    }
}
