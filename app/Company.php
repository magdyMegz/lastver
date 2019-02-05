<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public  $table="companies";
    public  function cars(){
        return $this ->hasMany('App\Car');

    }

    protected $fillable = [
        'address','city','company_name','Company_phone','country','email',
        'governorate','Tax_card'
    ];
}
