<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class pengguna extends Authenticatable
{
    // nama table
    protected $table = "pengguna";
    use HasFactory;
    // mass asignment exception
    protected $guarded = ["id"]; 
    // protected $fillable = ["id"];
    use Notifiable;
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
