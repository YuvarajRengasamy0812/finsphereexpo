<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Client extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = 'clients';

    protected $fillable = [
        'name','email','phone','location','password','status'
    ];

    protected $hidden = ['password'];
}
