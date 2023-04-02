<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serviceProvider extends Model
{
    use HasFactory;
    protected $table = "service_provider_table_";
    protected $primarykey = "SP_id";
    protected $fillable = ["firstName","lastName","gender","phoneNo","email","password","Area","City","pincode"];
}
