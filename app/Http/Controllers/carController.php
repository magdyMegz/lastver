<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class carController extends Controller
{
    public  function  insertNewCompany(Request $Request){
        //insert Car image
        $car=new  Car();
        $image=$Request->file('car_image');
        $input['carImageName']=$image->getClientOriginalName();
        $destination=public_path('/image');
        $image->move($destination,  $input['carImageName']);
        $car->car_name=  $input['carImageName'];

        //insert  other Details
        $car->car_name=$Request->car_name;
        $car->color=$Request->color;
        $car->doors_number=$Request->doors_number;
        $car->license=$Request->license;
        $car->model=$Request->model;
        $car->price=$Request->price;
        $car->seats_number=$Request->seats_number;
        $car->transmission=$Request->transmission;
        $car->aircondition=$Request->aircondition;
        $car->company_id=1;

        $car->save();
        //get ID of this Company
       // $id=DB::table('companies')->where('email','=',$Request->email)->value('id');
        return redirect("carRentalProject.addNewCar");
    }

}
