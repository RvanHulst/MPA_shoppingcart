<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            'category' => 'Hardware'
            ],[
            'category' => 'Computers'
            ],[
            'category' => 'Software'
            ],[
            'category' => 'Television'
            ],[
            'category' => 'Tools'  
            ]         
        ]);
    }
}
