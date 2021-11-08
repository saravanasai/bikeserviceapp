<?php

namespace App\Models\AdminModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "bookings";
    protected $fillable = [
        "booking_user",
        "complaint",
        "service_on_date",
        "booking_status",
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'booking_user', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'booking_status', 'id');
    }
}
