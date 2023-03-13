<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Header;
use App\Models\HeaderTranslation;
use App\Models\About;
use App\Models\AboutTranslation;
use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\Title;
use App\Models\TitleTranslation;
use App\Models\Service;
use App\Models\ServiceTranslation;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Admin
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

        //Users
        \App\Models\User::factory(10)->create();
        

        //Categories
        Category::factory(5)->create();


        for ($i = 0; $i <= 5; $i++) {
            CategoryTranslation::factory()->count(1)->create(['category_id' => $i, 'locale' => 'es']);
            CategoryTranslation::factory()->count(1)->create(['category_id' => $i,'locale' => 'en']);
            CategoryTranslation::factory()->count(1)->create(['category_id' => $i,'locale' => 'ca']);
        }

        $this->call(TagSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(CommentSeeder::class);

        //Pages
        \App\Models\Page::factory()->create(['name' => 'Home']);

        //Header home page
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

        //Titles Home Page
        Title::factory()->count(1)->create(['page_id' => 1])->each(function (Title $title) {
            TitleTranslation::factory()->count(1)->create([
                'title_id' => $title->id, 
                'locale' => 'es',
                'title' => 'Servicios',
                'text' => 'Descripción Servicios'
            ]);
            TitleTranslation::factory()->count(1)->create([
                'title_id' => $title->id,
                'locale' => 'en',
                'title' => 'Services',
                'text' => 'Services Description'
            ]);
            TitleTranslation::factory()->count(1)->create([
                'title_id' => $title->id,
                'locale' => 'ca',
                'title' => 'Serveis',
                'text' => 'Descripció Serveis'
            ]);
        });

        Title::factory()->count(1)->create(['page_id' => 1])->each(function (Title $title) {
            TitleTranslation::factory()->count(1)->create([
                'title_id' => $title->id, 
                'locale' => 'es',
                'title' => 'Proyectos',
                'text' => 'Descripción Proyectos'
            ]);
            TitleTranslation::factory()->count(1)->create([
                'title_id' => $title->id,
                'locale' => 'en',
                'title' => 'Projects',
                'text' => 'Projects Description'
            ]);
            TitleTranslation::factory()->count(1)->create([
                'title_id' => $title->id,
                'locale' => 'ca',
                'title' => 'Projectes',
                'text' => 'Descripció Projectes'
            ]);
        });

        Title::factory()->count(1)->create(['page_id' => 1])->each(function (Title $title) {
            TitleTranslation::factory()->count(1)->create([
                'title_id' => $title->id, 
                'locale' => 'es',
                'title' => 'Publicaciones',
                'text' => 'Descripción Publicaciones'
            ]);
            TitleTranslation::factory()->count(1)->create([
                'title_id' => $title->id,
                'locale' => 'en',
                'title' => 'Posts',
                'text' => 'Posts Description'
            ]);
            TitleTranslation::factory()->count(1)->create([
                'title_id' => $title->id,
                'locale' => 'ca',
                'title' => 'Publicacions',
                'text' => 'Descripció Publicacions'
            ]);
        });

        //About home page
        About::factory()->count(1)->create(['page_id' => 1])->each(function (About $about) {
            AboutTranslation::factory()->count(1)->create(['about_id' => $about->id, 'locale' => 'es']);
            AboutTranslation::factory()->count(1)->create(['about_id' => $about->id,'locale' => 'en']);
            AboutTranslation::factory()->count(1)->create(['about_id' => $about->id,'locale' => 'ca']);
        });

        //Services
        Service::factory()->count(1)->create(['page_id' => 1])->each(function (Service $service) {
            ServiceTranslation::factory()->count(1)->create([
                'service_id' => $service->id, 
                'locale' => 'es',
                'title' => 'Desarrollo web',
                'text' => 'Descripción desarolloro web'
            ]);
            ServiceTranslation::factory()->count(1)->create([
                'service_id' => $service->id,
                'locale' => 'en',
                'title' => 'Web development',
                'text' => 'Web development Description'
            ]);
            ServiceTranslation::factory()->count(1)->create([
                'service_id' => $service->id,
                'locale' => 'ca',
                'title' => 'Desenvolupament web',
                'text' => 'Descripció desenvolupament web'
            ]);
        });

    }
}
