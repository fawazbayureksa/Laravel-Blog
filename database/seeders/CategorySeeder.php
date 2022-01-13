<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name' => 'Code',
        	'slug' => 'code'
        ]);
        DB::table('categories')->insert([
            'name' => 'Article',
            'slug' => 'article'
        ]);
    }
}
