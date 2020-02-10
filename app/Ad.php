<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['name', 'cost', 'info', 'email', 'phone', 'location', 'cat_id'];
}
