<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['name', 'cost', 'info', 'email', 'phone', 'location', 'cat_id'];

    public function comments(){
        return $this->hasMany(Comments::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
