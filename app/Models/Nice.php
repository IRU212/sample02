<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nice extends Model
{
    protected $table = 'nices';

    protected $fillable = [
        'id',
        'ec_id',
        'userid'
    ];

    //いいね機能
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function post() {
        return $this->belongsTo(EC::class);
    }
}
