<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'name',
        'lastname', 
        'email',
        'phone',
        'company',
        'terms_accepted',
        'trial_expires_at',
        'email_sent'
    ];

    protected $casts = [
        'terms_accepted' => 'boolean',
        'email_sent' => 'boolean',
        'trial_expires_at' => 'datetime'
    ];
}
