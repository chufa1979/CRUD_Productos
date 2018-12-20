<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Categorias extends Model
{
    use SoftDeletes;

    protected $table = 'categorias';

    protected $dates = ['deleted_at'];

    protected $fillable = ['categoria'];    
}
