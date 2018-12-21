<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Categorias extends Model
{
    use Notifiable;
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

    public function getEncodeIDAttribute()
    {
        return \Hashids::encode($this->id);
    }
}
