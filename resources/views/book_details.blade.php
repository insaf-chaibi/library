@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container alert">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{$message}}
                        </div>
                    @endif
                </div>
                <div class="card">

                    <div class="card-body">
                        <img src="{{$dog->image}}" class="img-fluid" style="height: 30%; width:30% ; margin:10px">
                        <div class="container">

                                <div class="row">
                                    <div class="col-4 col-md-3">Name </div>
                                    <div class="col-8 col-md-9"><p>{{$dog->name}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4 col-md-3">Location </div>
                                    <div class="col-8 col-md-9"><p>{{$dog->location}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4 col-md-3">Age </div>
                                    <div class="col-8 col-md-9">

                                        @if($dog->age == 1)
                                            <p>{{ $dog->age }}  year</p>
                                        @else
                                            <p>{{ $dog->age }}  years</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 col-md-3">Weight </div>
                                    <div class="col-8 col-md-9"><p>{{$dog->weight}} Kg</div>
                                </div>

                                <div class="row">
                                    <div class="col-4 col-md-3"> Breed </div>
                                    <div class="col-8 col-md-9"><p>{{$dog->breed}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-4 col-md-3">Gender</div>
                                    <div class="col-8 col-md-9"><p>{{$dog->gender}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-4 col-md-3">Vaccinated</div>
                                    <div class="col-8 col-md-9"><p>{{$dog->vaccinated}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-4 col-md-3">Sterilized</div>
                                    <div class="col-8 col-md-9"><p>{{$dog->sterilized}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-4 col-md-3">Description</div>
                                    <div class="col-8 col-md-9"><p>{{$dog->description}}</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

