<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // สร้างประเภทสินค้า 5 รายการ
        $productType = ProductType::factory(5)->create();
        //สำหรับแต่ละประเภทสินค้าให้สร้างสินค้าสุ่ม100รายการ
        Product::factory(100)->create();
    }
}
