<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'country',
        'birth_date',
    ];

    protected $hidden = [
        'password',
    ];
}
