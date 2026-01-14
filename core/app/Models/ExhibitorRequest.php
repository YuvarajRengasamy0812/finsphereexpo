<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExhibitorRequest extends Model
{
    use HasFactory;
protected $table = 'exhibitor_bookings';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'designation',
        'description'
    ];
}
