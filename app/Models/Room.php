<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone'];
    
    public function bookings() {
        return $this->hasMany(Booking::class,'room_id');
    }
    public function roomType()
    {
        return $this->belongsTo(RoomType::class);  // ระบุว่า Room มีความสัมพันธ์ "belongsTo" กับ RoomType
    }
}
