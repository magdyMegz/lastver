<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public  $table="cars";
    public  function companies(){
        return $this ->belongsTo('App\Company');

    }
    public function orderDetails(){
        return $this->belongsToMany('App\Order');
    }
    protected $fillable = [
        'aircondition','car_name','color','company_id','doors_number',
        'license','model','price','seats_number','transmission'
    ];
}
