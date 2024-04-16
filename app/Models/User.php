<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model 
{
    // use HasFactory, Notifiable;
    
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // ...

    // Implémentez les méthodes de l'interface JWTSubject

    
}