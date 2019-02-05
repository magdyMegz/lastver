<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public  $table="customers";
    public  function orders(){
        return $this ->hasMany('App\Order');

    }
    protected $fillable = [
        'customer_email','customer_FirstName','customer_lastName','customer_phone','SSN'];
}
