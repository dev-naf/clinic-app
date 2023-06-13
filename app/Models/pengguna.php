<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = "pengguna";
    use HasFactory;
    // mass asignment exception
    protected $guarded = ["id"]; 
    // protected $fillable = ["id"];
    // nama table
    
}
