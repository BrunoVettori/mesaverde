<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'nome' => 'bruno vettori peressoni',
            'email' => 'bruno_vettori@proton.me',
            'password' => '$2y$12$U12pBGczQCL3c3/rqg2GxOVI59Be0wJAAJni.dCcPNZxqMrPHOYEC',
            'permissao' => 'root',
            'cpf' => '11714974901',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
