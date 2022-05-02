<?php

use Illuminate\Database\Seeder;

class NewspostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('newsposts')->insert([
        ['title'=>'3周年記念セール', 'slug' => 'yearssale', 'description'=>'Lalashopオープン3周年を記念して! 全商品10%の大セール','image'=>'storage/news/1.jpg','textaria'=>'全商品10%OFFの大セール。<br>さらにスペシャル。ご購入者様全員に、当店オリジナルのマスクプレゼント。', 'created_at' => new DateTime(),
                    'updated_at' => new DateTime()],
        ['title' => '眠りの香り特集', 'slug' => 'sleep', 'description' => 'おうち時間をゆったり過ごしてもらうための香りアイテムをピックアップ。', 'image' => 'storage/news/2.jpg', 'textaria' => 'ハーブ、カモミール、ラベンダー。好きな香りで穏やかに過ごしませんか。ギフトにもおすすめです。', 'created_at' => new DateTime(),
                    'updated_at' => new DateTime()],
        ['title' => 'ゴールデンウィーク休業案内', 'slug' => 'gw', 'description' => '5/1〜7までお休みします', 'image' => '', 'textaria' => 'ゴールデンウィーク休業中にいただいた商品の発送は、5/8になります。お問い合わせへの返答も、5/8以降随時行います。ご了承ください。', 'created_at' => new DateTime(),
                    'updated_at' => new DateTime()],
        ]
);
}
}
