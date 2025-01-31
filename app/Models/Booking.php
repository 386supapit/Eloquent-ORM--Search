<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'room_id', 'check_in', 'check_out', 'status', 'total_price'];
    public function Customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function room() {
        return $this->belongsTo(Room::class, 'room_id');
    }
}
