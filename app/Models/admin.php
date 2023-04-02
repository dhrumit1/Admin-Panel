<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $table = "admin";
    protected $primarykey = "admin_id";
    protected $fillable = ["UserName","Password","Name","Email","Mobile_No","image"];
}
