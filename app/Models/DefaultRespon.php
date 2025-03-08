<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DefaultRespon extends Model
{
    protected $table = 'default_responses';
    protected $fillable = ['responses'];

    protected $casts = [
        'responses' => 'array',
    ];
}
