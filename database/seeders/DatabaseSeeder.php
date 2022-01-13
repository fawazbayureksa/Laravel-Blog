<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Post::factory(15)->create();
        $this->call([
        	CategorySeeder::class,
        	// PostSeeder::class,
        	// UserSeeder::class,
        ]);
    }
}
