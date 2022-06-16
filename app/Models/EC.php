<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EC extends Model
{
    protected $table = 'ecs';

    protected $fillable = 
        [
            'id',
            'user_id',
            'message',
            'created_at'
        ];

        //投稿機能
        public function users(){
            return $this->belongsTo(User::class);
        }
        public function ecs(){
            return $this->hasMany(User::class);
        }

        public function user(){
            return $this->hasOne(User::class);
        }

        //いいね機能
        public function nices(){
            return $this->hasMany(Nice::class);
        }
}
