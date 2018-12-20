<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\SoftDeletes; 


class Categorias extends Model
{
    use SoftDeletes;
    use SearchableTrait;

    protected $table = 'categorias';

    protected $dates = ['deleted_at'];

    protected $fillable = ['categoria'];    

    protected $searchable = [
        'columns' => [
          'categorias.categoria' => 5,
        ]
    ];    

}
