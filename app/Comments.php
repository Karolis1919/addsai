<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['text', 'post_id', 'user_id'];

    public function user(){
        return $this->belongsTo(user::class);
    }
}
