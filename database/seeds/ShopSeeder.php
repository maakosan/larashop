<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([[
                'name' => 'LalaShop',
                'company' => 'ララ株式会社',
                'post' => '000-0000',
                'address' => '静岡県浜静市岡町000-0000',
                'email' => 'test@webyaru.com',
                'tel' => '000-000-0000',
                'description' => 'Laravelの勉強のために作ったサンプルサイトです。実存しませんので、ご了承ください。',
            ]]
        );
    }
}
