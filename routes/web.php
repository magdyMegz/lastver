<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/home', function () {
        if(Auth::user()->role==1){
            return view('home');
        }
        else{
            $id= Auth::user()->id;
            return redirect("/showCompany/$id");
        }

    });
    Route::get('/checkRegister', function () {
        if(Auth::user()->role==1){
            return view('home');
        }
        else{
            return redirect("/add");
        }

    });
    Route::get('showCompany/{id}','companyController@showCompany');
    Route::get('add','companyController@addNewCompany')->middleware('admin');
    Route::post('insert','companyController@insertNewCompany');

});
Route::get('/addnewcar',function (){
    return view('carRentalProject.addNewCar');
});
//Route::get('/home', 'HomeController@index')->name('home');
