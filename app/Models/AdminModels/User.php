<?php

namespace App\Models\AdminModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends  Authenticatable
{
    use HasFactory;

    protected $table = "users";
    protected $fillable = [
        "name",
        "email",
        "phonenumber",
        "password",
        "remember_token",
        "booking_status",
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'booking_user', 'id');
    }
}
