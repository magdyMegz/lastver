<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public  $table="orderDetails";

    protected $fillable = [
        'car_id','order_id'];

}
