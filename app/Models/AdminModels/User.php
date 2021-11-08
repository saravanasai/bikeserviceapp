<?php

namespace App\Models\AdminModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = "users";
    protected $fillable = [
        "email",
        "phonenumber",
        "password",
        "booking_status",
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'booking_user', 'id');
    }
}
