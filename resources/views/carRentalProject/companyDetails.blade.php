@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <img src="/image/{{$companiesInformation->company_image}}" width="200px" height="200px">
            <br><BR>
            <h1>Company Name {{$companiesInformation->company_name}}</h1>
            <br><BR>

            <h1> Country {{$companiesInformation->country}}</h1>
            <br><BR>

            <h1> governorate {{$companiesInformation->governorate}}</h1>
            <br><BR>

            <h1> City {{$companiesInformation->city}}</h1>
            <br><BR>

            <h1>Phone {{$companiesInformation->Company_phone}}</h1>
            <br><BR>

            <h1>Email {{$companiesInformation->email}}</h1>
            <br><BR>

            <h1>Address {{$companiesInformation->address}}</h1>
            <br><BR>

            <img src="/image/{{$companiesInformation->Tax_card}}" width="400px" height="200px">


        </div>
    </div>

    </div>
@endsection
