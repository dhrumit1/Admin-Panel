<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serviceConsumer extends Model
{
    use HasFactory;
    protected $table = "service_consumer";
    protected $primarykey = "SC_id";
    protected $fillable = ["firstName","lastName","gender","phoneNo","email","password","Area","City","pincode"];
}
