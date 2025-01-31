<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'product_type',
        'amount',
        'photo',
        'confirmed',
        'votrs',
        'created_date',
    ];//กำหนดฟิลด์ที่สามารถเพิ่มข้อมูลได้ผ่าน mass assignment
    public function productType() //ความสัมพันธ์ many-to-one กับ ProductType
    {
        return $this->belongsTo(ProductType::class,'product_type');
    }
}
