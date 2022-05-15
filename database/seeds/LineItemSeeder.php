<?php

use Illuminate\Database\Seeder;

class LineItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('line_items')->insert([[
                'id' => '1',
                'cart_id' => '1',
                'product_id' => 'a',
                'quantity' => '1',
                'created_at' => '',
                'updated_at' => '',
            ]]
        );
    }
}
