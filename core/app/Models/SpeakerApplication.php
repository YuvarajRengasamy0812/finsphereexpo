<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeakerApplication extends Model
{
    use HasFactory;
protected $table = 'speaker_bookings';
    protected $fillable = [
        'name',
        'email',
        'company',
        'designation',
        'topic',
        'about'
    ];
}
