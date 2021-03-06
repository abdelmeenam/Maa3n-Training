<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\PostsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //calling factories
        \App\Models\User::factory(1)->create();
        Category::factory(10)->create();

        //calling seeder
        $this->call([
            PostsTableSeeder::class
        ]);
    }
}
