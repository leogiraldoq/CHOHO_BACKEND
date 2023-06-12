<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;


class usuarios extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    protected $table="usuarios";
    protected $fillable=[
        'usuario',
        'password',
        'rol_usuario',
        'activo',
        'email'
    ];

    protected $hidden = [
        'password'
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

}
