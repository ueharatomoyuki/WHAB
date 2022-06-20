<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Default_categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('default_categories')->insert([
            ['category_name' => '食品', 'category_select' => 1],  //1:変動費　2:固定費
            ['category_name' => '家賃', 'category_select' => 2],
            ['category_name' => '日用品', 'category_select' => 1],
            ['category_name' => '雑貨', 'category_select' => 1],
            ['category_name' => '医療', 'category_select' => 1],
            ['category_name' => '保険', 'category_select' => 2],
            ['category_name' => '衣服', 'category_select' => 1],
            ['category_name' => 'スマホ', 'category_select' => 1],
            ['category_name' => 'wifi', 'category_select' => 2],
            ['category_name' => '水道', 'category_select' => 1],
            ['category_name' => '電気', 'category_select' => 1],
            ['category_name' => 'ガス', 'category_select' => 1],
            ['category_name' => '交際', 'category_select' => 1]
        ]);
    }
}
