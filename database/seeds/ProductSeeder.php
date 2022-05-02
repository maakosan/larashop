<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('products')->insert([
    ['slug' => 'flowergift', 'productno'=>'f132', 'name'=>'フラワーギフト','description'=> '季節の花を中心にした、フラワーギフトです。お祝いや記念日にいかがでしょうか。<br>農家直輸入の鮮度の高い花を仕入れ、弊社のフラワーコーディネーターが素敵にアレンジ。手書きのメッセージカードとともに、大切な人にお贈けします。', 'categoryslug1' => 'gift', 'categoryslug2' => 'flower', 'categoryslug3' => '', 'mainimage'=> '/storage/image/1.jpg', 'subimage1' => '/storage/image/1-1.jpg', 'subimage2' => '/storage/image/1-2.jpg', 'subimage3' => '/storage/image/1-3.jpg','price'=>'4500','pickup' =>'1', 'stock' => '10'],
    ['slug' => 'aromagift', 'productno' => 'a143','name'=>'アロマギフト','description'=> '季節の香りを中心にした、アロマギフトです。女子同士のプレゼントにおすすめです。<br>農家直輸入の花から精度の高い香りに仕上げた特別なアロマギフトです。弊社のアロマコーディネーターが厳選したパッケージです。手書きのメッセージカードとともに、大切な人にいかがでしょうか。自分用にもおすすめです。', 'categoryslug1' => 'gift', 'categoryslug2' => 'aroma', 'categoryslug3' => '', 'mainimage' => '/storage/image/2.jpg', 'subimage1' => '/storage/image/2-1.jpg', 'subimage2' => '/storage/image/2-2.jpg', 'subimage3' => '/storage/image/2-3.jpg', 'price'=>'5500','pickup' =>'0', 'stock' => '10'],
    ['slug' => 'floweraroma', 'productno' => 'f133', 'name' => 'フラワーとアロマのギフトセット', 'description' => '季節の花と香りを中心にしたプレゼント用パッケージ。お祝いや記念日にいかがでしょうか。<br>女子同士のプレゼントや、お祝いや記念日にいかがでしょうか。。弊社のアロマコーディネーターが厳選したアロマパッケージとフラワーのセットです。手書きのメッセージカードとともに、大切な人に直接お贈りすることもできます。', 'categoryslug1' => 'gift', 'categoryslug2' => 'flower', 'categoryslug3' => '', 'mainimage' => '/storage/image/3.jpg', 'subimage1' => '/storage/image/3-1.jpg', 'subimage2' => '/storage/image/3-2.jpg', 'subimage3' => '/storage/image/3-3.jpg', 'price' =>'7000','pickup' =>'0', 'stock' => '0'],
    ['slug' => 'lavenderaroma','productno' => 'a335', 'name' => 'ラベンダーアロマ','description' => 'ラベンダーの香りのアロマキット。落ち着く香りでリラックスタイムを過ごしませんか。<br>ギフト対応、直送対応可能。手書きのメッセージカードとともに、大切な人に直接お届けすることもできます。', 'categoryslug1' => 'gift', 'categoryslug2' => 'flower', 'categoryslug3' => 'aroma', 'mainimage' => '/storage/image/4.jpg', 'subimage1' => '/storage/image/4-1.jpg', 'subimage2' => '/storage/image/4-2.jpg', 'subimage3' => '/storage/image/4-3.jpg', 'price' => '2000','pickup' =>'1', 'stock' => '10'],
    ['slug' => 'chamomilearoma', 'productno' => 'a342', 'name' => 'カモミールアロマ', 'description' => 'カモミールの香りのアロマキット。安らぎの香りでリラックスタイムを過ごしませんか。<br>農家直輸入の花から精度の高い香りに仕上げた特別なアロマです。<br>ギフト対応、直送対応可能。手書きのメッセージカードとともに、大切な人に直接お贈りすることもできます。', 'categoryslug1' => 'aroma', 'categoryslug2' => '', 'categoryslug3' => '',  'mainimage' => '/storage/image/5.jpg', 'subimage1' => '/storage/image/5-1.jpg', 'subimage2' => '/storage/image/5-2.jpg', 'subimage3' => '/storage/image/5-3.jpg', 'price' => '2000','pickup' =>'1', 'stock' => '3'],
    ['slug' => 'seasonaroma','productno' => 'a224', 'name' => '夏のフラワー&ティーギフト','description' => '夏の花と冷茶で楽しめるハーブティーのセット。何が届くかお楽しみ。<br>農家直輸入の花やお茶から香り高いお茶に仕上げた特別なハーブティーです。','categoryslug1' => 'gift', 'categoryslug2' => 'flower', 'categoryslug3' => 'tea', 'mainimage' => '/storage/image/6.jpg', 'subimage1' => '/storage/image/6-1.jpg', 'subimage2' => '/storage/image/6-2.jpg', 'subimage3' => '/storage/image/6-3.jpg', 'price' => '2000', 'pickup' =>'0', 'stock' => '10'],
    ['slug' => 'chamomiletea', 'productno' => 't424', 'name' => 'カモミールティーセット', 'description' => 'カモミールのアロマとハーブティーのセット。安らぐ香りが睡眠を誘います。<br>農家直輸入の花から精度の高い香りに仕上げた特別なアロマと、農家直輸入の花やお茶から香り高いお茶に仕上げた特別なハーブティーのセットです。<br>プレゼントにもおすすめ。', 'categoryslug1' => 'gift', 'categoryslug2' => 'tea', 'categoryslug3' => '',  'mainimage' => '/storage/image/7.jpg', 'subimage1' => '/storage/image/7-1.jpg', 'subimage2' => '/storage/image/7-2.jpg', 'subimage3' => '/storage/image/7-3.jpg', 'price' => '3000', 'pickup' =>'0', 'stock' => '10'],
    ['slug' => 'lavendetea','productno' => 't512', 'name' => 'ミモザのアロマセット', 'description' => 'アロマセット。安らぐ香りで優しい気分になれます。<br>ギフト対応、直送対応可能。手書きのメッセージカードとともに、大切な人に直接お贈りすることもできます。プレゼントにも、自分用にもおすすめです。', 'categoryslug1' => 'gift', 'categoryslug2' => 'aroma','categoryslug3' => '', 'mainimage' => '/storage/image/8.jpg', 'subimage1' => '/storage/image/8-1.jpg', 'subimage2' => '/storage/image/8-2.jpg', 'subimage3' => '/storage/image/8-3.jpg',  'price' => '3000','pickup' =>'0', 'stock' => '10'],
    ['slug' => 'seasontea','productno' => 't112', 'name' => '季節のアロマとティーセット','description' => '季節のアロマとハーブティーのセット。何が届くかお楽しみ。ボリュームにびっくり。10種類以上のハーブティとアロマが入っています。未販売の幻の香りも入ってるかも? プレゼントにもおすすめ', 'categoryslug1' => 'aroma', 'categoryslug2' => 'tea', 'categoryslug3' => '',  'mainimage' => '/storage/image/9.jpg', 'subimage1' => '/storage/image/9-1.jpg', 'subimage2' => '/storage/image/9-2.jpg', 'subimage3' => '/storage/image/9-3.jpg', 'price' => '3000','pickup' => '1','stock'=>'10']
    ]);
}
}
