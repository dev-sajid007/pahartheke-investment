<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'details',
        'email',
        'phone',
        'address',
        'facebook',
        'instagram',
        'whatsapp',
        'logo',
    ];
}
