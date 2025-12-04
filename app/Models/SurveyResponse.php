<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{
    protected $fillable = [
        'fullname', 'email', 'phone', 'company', 'rating', 'feedback', 'show_on_home'
    ];

    protected $casts = [
        'show_on_home' => 'boolean',
    ];
}


