<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occasion extends Model
{
    protected $table = 'occasion';
     protected $fillable = ['id','add_id','title','recurrance','senddate'];

        public function product()
    {
        //return $this->belongsTo('App\Product');
    }
}

