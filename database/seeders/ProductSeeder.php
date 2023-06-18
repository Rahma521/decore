<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $product = [
            [
                'product_name' =>' 1تصميم',
                'product_price'=>'100',
                'des' =>'نوع الخشب: خشب مضغوط'
            ],
            [
                'product_name' =>'2تصميم',
                'product_price'=>'150',
                'des' =>'المادة: HPL Top & Beech Solid Wood (زان) الأرجل'
            ],
            [
                'product_name' =>'3تصميم',
                'product_price'=>'200',
                'des' =>'الألوان المتاحة: ذهبي'
            ],
            [
                'product_name' =>'غرف نوم اطفال',
                'product_price'=>'230',
                'des' =>'مكونات الغرفة: سرير 120 + كمود + تسريحة + مراه + دولاب 200 مفصلي
                او 2 سرير 120 + كمود + تسريحة + مراه + دولاب 200 مفصلي'
            ],
            [
                'product_name' =>'5تصميم',
                'product_price'=>'240',
                'des' =>'تُباع الغرفة كمجموعة كاملة وليس منفصلة
                نوع الخشب: اللوح “'
            ],
            [
                'product_name' =>'فيدا 120 شامبانيا',
                'product_price'=>'300',
                'des' =>'مكونات الغرفة: سرير 120 + كمود × 2 + ﺗﺳرﯾﺣﺔ + ﻣراة + دولاب مفصلي 160
                خشب MDF ذات جودة أوروبية بسطح ميلامين'
            ],
            
        ];

        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
