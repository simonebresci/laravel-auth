<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = ['img_path', 'name', 'ingredients', 'price', 'description','peso'];
}
