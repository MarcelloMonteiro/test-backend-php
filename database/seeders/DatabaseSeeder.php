<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Employee::create([
            'name' => 'Usuário de teste',
            'email' => 'teste@teste.com.br',
            'password' => bcrypt( 'Senh@123' )
        ]);

        \App\Models\Status::create([
            'status' => 'em andamento'
        ]);
        \App\Models\Status::create([
            'status' => 'concluída'
        ]);
        \App\Models\Status::create([
            'status' => 'cancelada'
        ]);
    }
}
