<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'order_date', 'order_status', 'total_amount',
    ];
    protected $attributes = [
        'order_status' => 'pending', // ค่าเริ่มต้น
    ];
    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function orderDetails() {
        return $this->hasMany(OrderDetail::class);
    }
}
