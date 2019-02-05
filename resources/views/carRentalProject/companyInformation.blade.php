@extends('layouts.app')
@section('content')

<h1 class="display-3 text-center text-danger">Please add your company information !</h1>
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form  method="post" action="insert" enctype="multipart/form-data">
                {{csrf_field()}}
                {{--name--}}
                <div class="form-group">
                    <label for="company_name" >Company name</label>
                    <input type="text" id="company_name" name="company_name" class="form-control" required>
                    {{--image--}}
                    <div style="border: 1px solid gray;" class="my-2 p-2" >
                        <label for="company_image" >Company Logo/photo</label>
                        <input type="file" id="company_image" name="company_image" class="form-control-file pl-3" required >
                    </div>
                    {{--country --}}

                    <div>
                        <label for="country">Country</label>
                        <input list="countries"  class="form-control" id="country" name="country" required>
                        <datalist id="countries">
                            <option value="Egypt">
                        </datalist>
                    </div>
                    {{--gouver--}}
                    <div>
                        <label for="governorate">Gouvernorat</label>
                        <input list="gouvernorate" id="governorate" name="governorate" class="form-control" required>
                        <datalist id="gouvernorate">
                            <option value="cairo">
                            <option value="alexandria">
                            <option value="giza">
                            <option value="minia">
                            <option value="assiut">
                        </datalist>
                    </div>
                    {{--city--}}
                    <div>
                        <label for="city">City</label>
                        <input list="City" id="city" name="city" class="form-control" required >
                        <datalist id="City">
                            <option value="cairo">
                            <option value="alexandria">
                            <option value="giza">
                            <option value="minia">
                            <option value="assiut">
                        </datalist>
                    </div>
                    {{--address--}}
                    <div>
                        <label for="address" >Address </label>
                        <input type="text" id="address" class="form-control" name="address" required>
                    </div>

                    {{--Company_phone--}}
                    <div>
                        <label for="Company_phone" >Phone </label>
                        <input type="text" id="Company_phone" class="form-control" name="Company_phone" required>
                    </div>
                    {{--taxcard--}}
                    <div style="border: 1px solid gray;" class="my-2 p-2">
                        <label for="Tax_card" >Tax card</label>
                        <input type="file" id="Tax_card" class="form-control-file pl-3" name="Tax_card" required>
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