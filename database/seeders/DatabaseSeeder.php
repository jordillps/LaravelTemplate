<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Header;
use App\Models\HeaderTranslation;
use App\Models\About;
use App\Models\AboutTranslation;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::factory()->create(['name' => 'Admin','description' =>'Administrador']);
        \App\Models\Role::factory()->create(['name' => 'User','description' =>'Usuario de la aplicación']);

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

        \App\Models\Page::factory()->create(['name' => 'Home']);

        Header::factory()->count(1)->create(['page_id' => 1])->each(function (Header $header) {
            HeaderTranslation::factory()->count(1)->create([
                'header_id' => $header->id, 
                'locale' => 'es',
                'title' => 'Yo soy Morgan Freeman',
                'text' => 'CEO DevFolio, Desarrollador web, Diseñador web, Frontend Desarrollador,Diseñador gráfico'
            ]);
            HeaderTranslation::factory()->count(1)->create([
                'header_id' => $header->id,
                'locale' => 'en',
                'title' => 'I am Morgan Freeman',
                'text' => 'CEO DevFolio,Web Developer,Web Designer,Frontend Developer,Graphic Designer'
            ]);
            HeaderTranslation::factory()->count(1)->create([
                'header_id' => $header->id,
                'locale' => 'ca',
                'title' => 'Jo soc Morgan Freeman',
                'text' => 'CEO DevFolio, Desenvolupador web, Dissenyador web, Frontend Desenvolupador,Dissenyador gràfic'
            ]);
        });

        About::factory()->count(1)->create(['page_id' => 1])->each(function (About $about) {
            AboutTranslation::factory()->count(1)->create(['about_id' => $about->id, 'locale' => 'es']);
            AboutTranslation::factory()->count(1)->create(['about_id' => $about->id,'locale' => 'en']);
            AboutTranslation::factory()->count(1)->create(['about_id' => $about->id,'locale' => 'ca']);
        });

    }
}
