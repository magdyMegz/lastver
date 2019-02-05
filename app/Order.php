<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public  $table="orders";
    public  function customers(){
        return $this ->belongsTo('App\Customer');

    }
    public function orderDetails(){
        return $this->belongsToMany('App\Car');
    }

    protected $fillable = [
        'Customer_id','EndDate','StartDate'];
}
