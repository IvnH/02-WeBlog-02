<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

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

        //Elimina la carpeta posts
        Storage::deleteDirectory('posts');
        //Crea la carpeta posts
        Storage::makeDirectory('posts');

        $this->call(UserSeeder::class);
        \App\Models\Category::factory(4)->create();
        \App\Models\Tag::factory(8)->create();
        $this->call(PostSeeder::class);
    }
}
