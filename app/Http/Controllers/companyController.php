<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class companyController extends Controller
{
    public  function  addNewCompany(){
        $emails=DB::table('companies')->pluck('email');
        foreach ($emails as $email)
        {
            if(Auth::user()&&(  Auth::user()->email ==$email )){
                return view('carRentalProject.companyInformation');

            }
            else{
                return "error";


            }


        }
            }

    public  function showCompany($id){
        $companiesInformation=DB::table('companies')->find($id);
        return view('carRentalProject.companyDetails',compact('companiesInformation'));
    }

    public  function  insertNewCompany(Request $Request){
        //insert company image
        $companyInformation=new  Company();
        $image=$Request->file('company_image');
        $input['companyImageName']=$image->getClientOriginalName();
        $destination=public_path('/image');
        $image->move($destination,  $input['companyImageName']);
        $companyInformation->company_image=  $input['companyImageName'];

        //insert taxCard image
        $image=$Request->file('Tax_card');
        $input['taxCardimageName']=$image->getClientOriginalName();
        $destination=public_path('/image');
        $image->move($destination,$input['taxCardimageName']);
        $companyInformation->Tax_card=  $input['taxCardimageName'];

        //insert  other Details
        $companyInformation->company_name=$Request->company_name;
        $companyInformation->governorate=$Request->governorate;
        $companyInformation->country=$Request->country;
        $companyInformation->city=$Request->city;
        $companyInformation->email=Auth::user()->email;
        $companyInformation->address=$Request->address;
        $companyInformation->Company_phone=$Request->Company_phone;
        $companyInformation->save();
        //get ID of this Company
        $id=DB::table('companies')->where('email','=',Auth::user()->email)->value('id');
        return redirect("/showCompany/$id");
      }
}
