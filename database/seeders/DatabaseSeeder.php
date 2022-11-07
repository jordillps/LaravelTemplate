<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        \App\Models\Role::factory()->create(['name' => 'admin','description' =>'administrador']);
        \App\Models\Role::factory()->create(['name' => 'user','description' =>'usuario de la aplicación']);

        DB::table('users')->insert([
            'name' => 'Jordi Administrador',
            'role_id' => 1,
            'email' => 'jordillps@gmail.com',
            'date_birth' => '1968-07-28 19:28:21',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
