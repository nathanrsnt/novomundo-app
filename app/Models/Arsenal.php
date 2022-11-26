<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsenal extends Model
{
    use HasFactory;
    protected $table = 'arsenais';

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}

