<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cate1s')->insert([
            ['categoryname' => 'ギフト', 'categoryslug' => 'gift'],
            ['categoryname' => 'フラワー', 'categoryslug' => 'flower'],
            ['categoryname' => 'アロマ', 'categoryslug' => 'aroma'],
            ['categoryname' => 'ティー', 'categoryslug' => 'tea']
        ]);

        DB::table('cate2s')->insert([
            ['categoryname' => 'ギフト', 'categoryslug' => 'gift'],
            ['categoryname' => 'フラワー', 'categoryslug' => 'flower'],
            ['categoryname' => 'アロマ', 'categoryslug' => 'aroma'],
            ['categoryname' => 'ティー', 'categoryslug' => 'tea']
        ]);

        DB::table('cate3s')->insert([
            ['categoryname' => 'ギフト', 'categoryslug' => 'gift'],
            ['categoryname' => 'フラワー', 'categoryslug' => 'flower'],
            ['categoryname' => 'アロマ', 'categoryslug' => 'aroma'],
            ['categoryname' => 'ティー', 'categoryslug' => 'tea']
        ]);
    }
}
