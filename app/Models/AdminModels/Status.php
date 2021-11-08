<?php

namespace App\Models\AdminModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = "statuses";
    protected $fillable = ["status"];
}
