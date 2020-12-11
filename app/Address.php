<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
     protected $fillable = [
        'id','to_name','to_address1','to_address2','toCity','toState','toZip','tocountry','from_name','from_address1','from_address2','fromCity','fromState','fromZip','fromcountry', 'customer_id', 'product_handle'];

        public function product()
    {
        //return $this->belongsTo('App\Product');
    }
}

