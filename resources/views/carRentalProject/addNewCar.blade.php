@extends('layouts.app')
@section('content')

    <h1 class="display-3 text-center text-danger">Please add your  Car information !</h1>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form  method="post" action="insertNewCar" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        {{--Car Name--}}
                        <label for="car_name" >Car name</label>
                        <input type="text" id="car_name" name="car_name" class="form-control" required>
                        {{--Car image--}}
                        <div style="border: 1px solid gray;" class="my-2 p-2" >
                            <label for="car_image" >Car photo</label>
                            <input type="file" id="car_image" name="car_image" class="form-control-file pl-3" required >
                        </div>
                        {{--car model --}}

                        <div>
                            <label for="model">model</label>
                            <input type="text" id="model" name="model" class="form-control pl-3" required >

                        </div>
                        {{--car color --}}

                        <div>
                            <label for="color">color</label>
                            <input type="text" id="color" name="color" class="form-control pl-3" required >

                        </div>
                        {{--car seats_number --}}

                        <div>
                            <label for="seats_number">seats  Number</label>
                            <input type="number" id="seats_number" name="seats_number" class="form-control pl-3" required >

                        </div>
                        {{--car transmission --}}

                        <div>
                            <label for="transmission">transmission</label>
                            <select id="transmission" name="transmission" class="form-control" required>
                                <option  value="automatic">Automatic</option>
                                <option  value="manuel">Manuel</option>

                            </select>

                        </div>
                        {{--aircondition --}}


                            <div style="border: 1px solid gray;" class="my-2 p-2" >
                                <label for="aircondition">aircondition</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="aircondition" name="aircondition" value="0">Yes &nbsp;&nbsp;&nbsp;
                                <input type="radio"  id="aircondition" name="aircondition" value="1">No
                            </div>


                        {{--price --}}
                        <div>
                            <label for="price">price per Day</label>
                            <input type="number" id="price" name="price"  class="form-control" required >
                        </div>

                        {{--doors_number --}}
                        <div>
                            <label for="doors_number">Doors Number</label>
                            <input type="number"  id="doors_number" name="doors_number" class="form-control" required >
                        </div>
                        {{--license --}}
                        <div  class="my-2 ">
                            <label for="license">Car license</label>
                            <input type="text"  id="license" name="license" class="form-control" required >
                        </div>

                        {{--submit--}}
                        <input type="submit" class="btn btn-success" >
                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

@endsection