<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'address'];
    
    public function orders() {
        return $this->hasMany(Order::class, 'customer_id');
    }
    public function bookings() {
        return $this->hasMany(Booking::class,'customer_id');
    }
}
