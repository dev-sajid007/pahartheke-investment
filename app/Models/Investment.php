<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'amount',
        'plan_id',
        'message',
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
